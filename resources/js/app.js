require('./bootstrap');

window.Pusher = require('pusher-js');

const pusher = new Pusher(process.env.MIX_PUSHER_APP_KEY, {
  cluster: process.env.MIX_PUSHER_APP_CLUSTER,
  encrypted: true,
});

const channel = pusher.subscribe('items');

channel.bind('item.created', function (data) {
  console.log('Item Created:', data.item);
});
