//
//  BulletinPost.swift
//  BulletinBoardMobile
//
//  Created by Tyre King on 6/1/16.
//  Copyright © 2016 Tyre King. All rights reserved.
//

import Foundation

class BulletinPost: NSObject {
    
    var title: String!
    var timestamp: String!
    var post: String!
    
    init(title: String, timestamp: String, post: String) {
        self.title = title
        self.timestamp = timestamp
        self.post = post
    }
}

