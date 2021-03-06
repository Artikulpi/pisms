<script type="text/javascript">
/**
* Script untuk character limiter
*/

jQuery.fn.limitCharacters = function(options){
	if (this.length == 0) return;

	var settings = {
		charLimit : 160,
		showRemaining : true,
		remainingClass : 'remainingChars alert',
		remainingWarnClass: 'remainingCharsWarn',
	};

	if (options){
		$.extend(settings, options);
	}

	this.after("<div style='width:100%; text-align: center;margin-top: 5px;' class='alert alert-warning'><span id='CharsLeft' class='remainingChars alert remainingCharsWarn' style='margin-left:10px'>160 Karakter lagi</span></div>");

	this.bind("change keyup focus input propertychange", function(event){
		var len = $(this).val().length;
		if(len > settings.charLimit){
			this.value = this.value.substring(0, settings.charLimit);
		}


		var charsLeft = settings.charLimit - len;
		if(charsLeft < 0){
			charsLeft = 0;
		}

		$('#CharsLeft').text(charsLeft + " Karakter lagi");
		if((settings.charLimit - len) > 10){
			if(!$('#CharsLeft').hasClass(settings.remainingClass)){
				$('#CharsLeft').addClass(settings.remainingClass);
			}
			if($('#CharsLeft').hasClass(settings.remainingWarnClass)){
				$('#CharsLeft').removeClass(settings.remainingWarnClass);
			}
		}else{
			if(!$('#CharsLeft').hasClass(settings.remainingWarnClass)){
				$('#CharsLeft').addClass(settings.remainingWarnClass);
			}
		}
		return this;
	});
}
$(document).ready(function() {
	$('#limit').limitCharacters();
});


/**
* Script untuk multi input
*/
function onAddTag(tag) {
	alert("Added a tag: " + tag);
}
function onRemoveTag(tag) {
	alert("Removed a tag: " + tag);
}
function onChangeTag(input,tag) {
	alert("Changed a tag: " + tag);
}
$(function() {
	$('#contact').tagsInput({width:'auto'});
});
$(function() {
	$('#no_tujuan').tagsInput({width:'auto'});
});



/**
* Script untuk Autocomplete remote
*/
$(function() {
	function split( val ) {
		return val.split( /,\s*/ );
	}
	function extractLast( term ) {
		return split( term ).pop();
	}

	$( "#kontak" )
      // don't navigate away from the field on tab when selecting an item
      .bind( "keydown", function( event ) {
      	if ( event.keyCode === $.ui.keyCode.TAB &&
      		$( this ).data( "ui-autocomplete" ).menu.active ) {
      		event.preventDefault();
      }
  })
      .autocomplete({
      	source: function( request, response ) {
      		$.getJSON( "<?php echo site_url('sms/autocomplete');?>", {
      			term: extractLast( request.term )
      		}, response );
      	},
      	search: function() {
          // custom minLength
          var term = extractLast( this.value );
          if ( term.length < 1 ) {
          	return false;
          }
      },
      focus: function() {
          // prevent value inserted on focus
          return false;
      },
      select: function( event, ui ) {
      	var terms = split( this.value );
          // remove the current input
          terms.pop();
          // add the selected item
          terms.push( ui.item.value );
          // add placeholder to get the comma-and-space at the end
          terms.push( "" );
          this.value = terms.join( ", " );
          return false;
      }
  });
  });

</script>
<style>
.ui-autocomplete-loading {
	background: white url('<?php echo base_url()?>media/img/ui-anim_basic_16x16.gif') right center no-repeat;
}
</style>