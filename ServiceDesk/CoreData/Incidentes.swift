//
//  Incidente+CoreDataProperties.swift
//  ServiceDesk
//
//  Created by Bruna on 09/07/2018.
//  Copyright © 2018 Bruna. All rights reserved.
//
//

import Foundation
import CoreData

@objc(Incidentes)
class Incidentes: NSManagedObject{
    
    @NSManaged public var id: Int16
    @NSManaged public var atendente: Int16
    @NSManaged public var cliente: Int16
    @NSManaged public var descricao: String?
    @NSManaged public var status: String?
    @NSManaged public var creation_time: Date
    
}



