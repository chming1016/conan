// jQuery 1.2.3 plugin by bootleq@gmail.com 2008-03-17
/*
  USAGE:
  
  $.flashSound( 'foo.mp3', {id: 'se1'} );
  $.flashSound.play('se1');
  $.flashSound.play('se1', true);   // stop previous before play
  $.flashSound.stop('se1');
  $.flashSound.remove('se1');

*/
/*
  USAGE(alternative):
  
  var se1 = $.flashSound( 'foo.mp3' );
  se1.play();
  se1.play(true);    // stop previous before play
  se1.stop();
  se1.remove();
  
  $.flashSound.enable();
  $.flashSound.disable();

*/

(function($) {

var tracks  = {};
var enabled = true;

nextId = function(){  // 新增 object 時，要用的 id
  var r = 0;
  while( $('#sound_'+r).length ) { r++; }
  return 'sound_'+r;
};
template = function(id, swf, url) {
  return '<object sap-type="object" sap="object" id="'+ id +'" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" height="0" width="0">'
  + '<param name="movie" value="'+ swf +'" /><param name="FlashVars" value="url='+ url +'" /><param name="allowScriptAccess" value="always" /><param name="loop" value="false" />'
  + '<embed name="'+ id +'" src="'+ swf +'" FlashVars="url='+ url +'" type="application/x-shockwave-flash" allowScriptAccess="always" loop="false" pluginspage="http://www.adobe.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" height="0" width="0" /></object>';
};

play = function(mono) {
  if( mono && typeof(this.swf_stop)=='function' ) { this.swf_stop(); }
  if( enabled && typeof(this.swf_play)=='function' ) { this.swf_play(); }
};
stop = function() {
  if( typeof(this.swf_stop)=='function' ) { this.swf_stop(); }
};
remove = function(id) {
  $('#'+id).remove();
  tracks[id] = null;
};

$.extend({
  flashSound: function( url ) {
    options = $.extend( {}, $.flashSound.defaults, arguments[1] );
    if(url.constructor != String) { return; }

    var id = options.id ? options.id : nextId();
    
    if(tracks[id]) { remove.call(tracks[id].obj); }   // 移除 id 相同的物件（以免重複）
    
    var obj = document.createElement('div');    // 新增一個 div 來放 flash 影片
    document.body.appendChild( obj );
    obj.innerHTML = template( id, options.swf, url );
    
    if (navigator.appName.indexOf("Microsoft") != -1) { obj = obj.firstChild; }
    else { obj = $(obj).find('embed').get(0); }
    
    tracks[id] = {
      obj: obj,
      play: function(mono){ play.call(obj,mono); },
      stop: function(){ stop.call(obj); },
      remove: function(){ remove.call(null,id); }
    };

    return tracks[id];
  }
});

$.flashSound.play = function(id, mono) {
  if(tracks[id]) return play.call(tracks[id].obj, mono);
};
$.flashSound.stop = function(id) {
  if(tracks[id]) return stop.call(tracks[id].obj);
};
$.flashSound.remove = function(id) {
  if(tracks[id]) return remove.call(null, id);
};

$.flashSound.enable = function() { enabled = true; };
$.flashSound.disable = function() {
  enabled = false;
  for( i in tracks) {
    if(tracks[i] && tracks[i].stop) tracks[i].stop();
  }
};

//$.flashSound.onSwfReady = function(id) { };

$.flashSound.defaults = {
  id: null,
  swf: 'flashSound.swf'
};

})(jQuery);
