<!DOCTYPE html>
<html>
<head>
  <title>Currently Active Demo</title>
  <style type="text/css">
    .currently-active {
      position: fixed;
      margin: 10px;
      padding: 5px;
      bottom: 0;
      left: 0;
      border: solid 1px #AFAFAF;
      border-radius: 6px;
      font-family: "Arial";
    }
  </style>
</head>
<body>
  <div class="currently-active">
    <span>Currently Active: </span><span id="active"></span>
  </div>
</body>
<script src="https://cdn.pubnub.com/sdk/javascript/pubnub.4.20.2.js"></script>
<script type="text/javascript">
var active = document.getElementById('active');
function setCurrentlyActiveUsers(numberOfUsers) {
  active.innerText = numberOfUsers.toString();
}
setCurrentlyActiveUsers(1);
var pubnub = new PubNub({
    publishKey : '__YOUR_PUB_KEY__',
    subscribeKey : '__YOUR_SUB_KEY__',
    heartbeatInterval: 30
});
pubnub.addListener({
  presence: function(presenceEvent) {
    setCurrentlyActiveUsers(presenceEvent.occupancy);
  }
});
pubnub.subscribe({ 
  channels: ['myWebPage1'],
  withPresence: true
});
</script>
</html>