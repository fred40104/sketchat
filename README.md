#Sketchat

Website Demo: [http://wonderbee.no-ip.biz/sketchat/](http://wonderbee.no-ip.biz/sketchat/)

Chatroom Demo: [http://wonderbee.no-ip.biz/sketchat/chatroom_demo.html?sketchat](http://wonderbee.no-ip.biz/sketchat/chatroom_demo.html\?sketchat)

#Using Package

##Gridster 

Source Code [http://gridster.net/](http://gridster.net/)

###Key point


##SimpleWebRTC 

Source Code [http://simplewebrtc.com/](http://simplewebrtc.com/)

###Key point

In simplewebrtc.bundle.js, below the function

####Add the remote video

    SimpleWebRTC.prototype.getRemoteVideoContainer

When the remote video adding, it triggers this function. We can deside to insert the remote video into the specified node that we want. At this point, we can combine to the gridster.js that can cool our video layout with dynamic locating and resizeabling.
      
####Remove the remote video

    SimpleWebRTC.prototype.handlePeerStreamRemoved

When the remote video removing, it triggers this function. We can find the node which is leaveing remote video and remove the node. This part is very important that we can know the people when they are leaving the chatroom. We can add an ajax in this function to record the leaving time in our database and do something accessing management. Like the chatroom should not have two same name or the or there is only unique chatroom name.

##Socket.io + Canvas drawing 

Source Code [http://wesbos.com/html5-canvas-websockets-nodejs/](http://wesbos.com/html5-canvas-websockets-nodejs/)

###Key point

