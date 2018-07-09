//
//  ViewController.swift
//  ServiceDesk
//
//  Created by Bruna on 09/07/2018.
//  Copyright © 2018 Bruna. All rights reserved.
//

import UIKit
import CoreData

class ViewController: UIViewController {

    
    var myIncidente: [NSManagedObject] = []
    var theSpot = 0;

    

//declaracao de entidades na tela
 
    //campos de input
    
    @IBOutlet weak var inputID: UITextField!
    
    @IBOutlet weak var inputAtendente: UITextField!
    
    
    @IBOutlet weak var inputCliente: UITextField!
    
    @IBOutlet weak var inputDescricao: UITextField!
    
    @IBOutlet weak var inputStatus: UITextField!
    
    @IBOutlet weak var inputData: UITextField!
    
    
    //botoes
    @IBAction func BotaoCriar(_ sender: Any) {
        AddDataToDatabase()
    }
    
    @IBAction func BotaoConsultar(_ sender: Any) {
        getData()
    }
    
    @IBAction func BotaoEditar(_ sender: Any) {
    }
    
    @IBAction func BotaoAtualizar(_ sender: Any) {
        update()
    }
    //Labels
    
    @IBOutlet weak var labelTopo: UILabel!
    
    //tabela
    
    @IBOutlet weak var tabelaView: UITableView!
    
    
//declaracao de funcoes da tela
    
    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
    }
    
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    //funcao adicionar
    func AddDataToDatabase(){
        //precarrega os itens

        if let context = (UIApplication.shared.delegate as? AppDelegate)?.persistentContainer.viewContext {
            
            let myIncidente = NSEntityDescription.insertNewObject(forEntityName: "Incidentes", into: context) as! Incidentes
            
            myIncidente.id = Int16(Int(inputID.text!)!)
            myIncidente.atendente = Int16(inputAtendente.text!)!
            myIncidente.cliente = Int16(inputCliente.text!)!
            myIncidente.descricao = inputDescricao.text;
            myIncidente.status = inputStatus.text;
            
            //conversao de data de string para data
            let dateFormatter = DateFormatter()
           // dateFormatter.dateFormat = "yyyy-MM-dd'T'HH:mm:ss.SZZZZZ"
            dateFormatter.dateFormat = "dd/MM/yyyy HH:mm:ss"
            
            myIncidente.creation_time = getDateFromString(dateString: inputData.text!)
            
            
            do{
                try context.save()
            } catch{
                let nserror = error as NSError
                NSLog("Unresolved error \(nserror), \(nserror.userInfo)")
                abort()
            }
            
        }
    }
    
    //funcao consultar
    func getData(){
        
        //adaptacao do metodo managedObjectContext para o novo swift
       if let context = (UIApplication.shared.delegate as? AppDelegate)?.persistentContainer.viewContext {
            
            let fetchRequest = NSFetchRequest<NSFetchRequestResult>(entityName: "Incidente")
            
            //adicionar sort
            let sortDescriptor = NSSortDescriptor(key: "id", ascending: true)
            fetchRequest.sortDescriptors = [sortDescriptor]
            
            do {
                myIncidente = try context.fetch(fetchRequest) as! [NSManagedObject]
                print (myIncidente.count)
                self.tabelaView.reloadData()
                
            } catch {
                print("Falha ao buscar incidentes")
                print (error)
            }
        }
            
    }
    
    
    //funcao atualizar
    func update(){
        if let context = (UIApplication.shared.delegate as? AppDelegate)?.persistentContainer.viewContext {
            
            let person = myIncidente[theSpot] as NSManagedObject
            person.setValue(inputID, forKey: "ID") //atualiza ID
            person.setValue(inputStatus, forKey: "Status") //atualiza Status
            
            do {
                try context.save()
                self.tabelaView.reloadData()
                inputID = nil
                inputStatus = nil
            } catch {
                let saveError = error as NSError
                print(saveError)
            }
        }
    }
    
    //funcao deletar
    func deleteData(){
        if ((UIApplication.shared.delegate as? AppDelegate)?.persistentContainer.viewContext) != nil {
            
            let person = myIncidente[theSpot] as NSManagedObject
            
            
            do {
                try person.managedObjectContext?.save()
                getData()
                inputID = nil
                inputStatus = nil
                
            } catch {
                let saveError = error as NSError
                print(saveError)
            }
        }
            
    }
    
    
 //------ table delegate-------
    func numberOfSectionInTableView(tabelaView: UITableView) -> Int {
        //retorna numero de secoes
        return 1
        
    }
    func tableView (tabelaView: UITableView, numberOfRowsInSection section: Int) -> Int{
        //retorna o numero de linhas
        return myIncidente.count
    }
        
        func tableView(tabelaView: UITableView, didSelectRowAtIndexPath indexPath: NSIndexPath){
            print("Row: \(indexPath.row)");
            theSpot=indexPath.row;
            
           // inputID.text = String(myIncidente[theSpot])
           // inputStatus.text = String(myIncidente[theSpot])
            
        }
    
//-- date func --
func getDateFromString(dateString: String, dateFormat: String = "dd-MM-yyyy") -> Date {
        let dateFormatter = Foundation.DateFormatter()
        dateFormatter.dateFormat = dateFormat
        
        return dateFormatter.date(from: dateString)!
    }
    
    
} //end of class

