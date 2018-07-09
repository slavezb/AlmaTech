//
//  Clientes+CoreDataProperties.swift
//  ServiceDesk
//
//  Created by Bruna on 09/07/2018.
//  Copyright © 2018 Bruna. All rights reserved.
//
//

import Foundation
import CoreData


@objc(Clientes)
class Clientes: NSManagedObject{

    @NSManaged public var id: Int16
    @NSManaged public var nome: String?
    public var empresa: String?

}
