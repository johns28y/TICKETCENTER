//
//  JSON.swift
//  BulletinBoardMobile
//
//  Created by Tyre King on 6/2/16.
//  Copyright © 2016 Tyre King. All rights reserved.
//this class will read and write

import Foundation

class JSON: NSObject {
    
    let TIMEOUT: NSTimeInterval = 15
    
    var url: NSURL!
    
    init(url: NSURL) {
        self.url = url
    }
    
    func getDataFromURL(url: NSURL, extract: (jsonData: NSData, error: Bool) -> Void) {
        let urlRequest = NSMutableURLRequest(URL: url, cachePolicy: .ReloadIgnoringLocalCacheData, timeoutInterval: TIMEOUT)
        let queue = NSOperationQueue()
        NSURLConnection.sendAsynchronousRequest(urlRequest, queue: queue, completionHandler: { (response: NSURLResponse?, data: NSData?, error: NSError?) -> Void in
            if error != nil {
                extract(jsonData: data!, error: true)
            }
            else {
                if data?.length > 0 {
                    extract(jsonData: data!, error: false)
                }
                else {
                    extract(jsonData: data!, error: true)
                }
            }
        })
    }
    
    func extractData() {
        if url != nil {
            
        }
    }
    
}