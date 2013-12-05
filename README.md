#Sketchat

Hey guys, write anything that can help others to know the cool things that you found.

Website Demo: [http://wonderbee.no-ip.biz/sketchat/](http://wonderbee.no-ip.biz/sketchat/)

Multi-user video chatroom Demo: [http://wonderbee.no-ip.biz/sketchat/chatroom_demo.html?sketchat](http://wonderbee.no-ip.biz/sketchat/chatroom_demo.html\?sketchat)

#How to implement

##Gridster 

Source website: [http://gridster.net/](http://gridster.net/)

Use this example to develop: [Resizable widgets](http://gridster.net/demos/resize.html)

###Using the API

The "Add widget" and "Remote widget" is quite simple. See [http://gridster.net/#usage](http://gridster.net/#usage)

###The widget attribute

Each of widget must have size info attriubte. When we create a new widget, we need to set its attribute.

	<li data-xsize = "3" data-ysize = "4" data-col = "1", data-row = "1"></li>

The above example show the four required attributes. Attribute data-xsize and data-ysize decide the size of the widget, data-col and data-row decide the location. The unit of the size and location are predefined in the gridster/size_standard.css, so you can know 1 col or 1 x-size is how many pixals.

##SimpleWebRTC 

Source website: [http://simplewebrtc.com/](http://simplewebrtc.com/)

In simplewebrtc.bundle.js, below the function

###Add the remote video

    SimpleWebRTC.prototype.getRemoteVideoContainer

When the remote video adding, it triggers this function. We can deside to insert the remote video into the specified HTML DOM node that we want. At this point, we can combine to the gridster.js that can cool our video layout with dynamic locating and resizeabling.
      
###Remove the remote video

    SimpleWebRTC.prototype.handlePeerStreamRemoved

When the remote video removing, it triggers this function. We can find the HTML DOM node which is leaving remote video and remove the it. This part is very important that we can know the people when they are leaving the chatroom. We can add an ajax in this function to record the leaving time in our database and do something accessing management. Like the chatroom should not have two same username or there is only unique chatroom name.


##Socket.io + Canvas drawing 

Source website: [http://wesbos.com/html5-canvas-websockets-nodejs/](http://wesbos.com/html5-canvas-websockets-nodejs/)

###How to use

####Step1: Set the socket url and port

For our host, in index.html, modify

	<script src="http://59.127.174.192:4000/socket.io/socket.io.js></script>

In script.js, modify

	App.socket = io.connect('http://59.127.174.192:4000');

####Step2: Run the socket server

Run the nodejs socket server

	node server.js

Make sure that the port is the same as the above js code setting. Also the the port should choose the idle one, so if it faild, maybe the port is busy.




