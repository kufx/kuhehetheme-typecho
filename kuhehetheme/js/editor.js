(function ($) {

  $(document).on('DOMContentLoaded', function(){

    const items=[

      {

        title:'下载',

        id:'wmd-dllink-button',

        class:'single-dllink'

      },

      {

        title:'跳转',

        id:'wmd-jplink-button',

        class:'single-jplink'

      },

    ];

    items.forEach(function(item){

      let element= $(`<li class="wmd-button" id="${item.id}" title="${item.title}">${item.title}</li>`); 

      element.on('click',function(){

        $('#text').toggleSelection(item.class);        

      });

      $('#wmd-button-row').append(element);

    });  

  });

  $.fn.extend({

    toggleSelection: function (a) {

      this.focus();

      let selected=document.getSelection();

      let result=selected.toString();

      if(result.length==0)return;

      let pattern=/<a class="(.*?)" href="(.*?)" rel="nofollow" target="_blank">(.*?)<\/a>/;

      let before=`<a class="${a}" href="(.*?)" rel="nofollow" target="_blank">`;

      let after='</a>'

      if(pattern.exec(result)){

        if(pattern.exec(result)[1]==a){

          selected.focusNode.children[1].setRangeText(pattern.exec(result)[3]+"||"+pattern.exec(result)[2]);

        }else{

          selected.focusNode.children[1].setRangeText(result.replace(pattern.exec(result)[1],a));

        } 

      }else{

        selected.focusNode.children[1].setRangeText(before.replace('(.*?)',result.split('||')[1])+result.split('||')[0]+after);

      }

    }

  });

})(jQuery);