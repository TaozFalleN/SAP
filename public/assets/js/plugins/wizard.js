function initNowUiWizard(){
  var $validator = $('.card-wizard').bootstrapWizard({
    'tabClass':'nav nav-pills',
    'nextSelector':'.btn-next',
    'previousSelector':'.btn-previous', 
    onNext:function(tab,navigation,index){
    var $valid=$('.card-wizard form').valid();
    if(!$valid){
      $validator.focusInvalid();
      return false;
      }
    },
    onInit:function(tab,navigation,index){
      var $total=navigation.find('li').length;
      $width=100/$total;
      navigation.find('li').css('width',$width+'%');
    },
    onTabClick:function(tab,navigation,index){
      var $valid=$('.card-wizard form').valid();
      if(!$valid){
        return false;
      }
      else{
        return true;
      }
    },
    onTabShow:function(tab,navigation,index){
      var $total=navigation.find('li').length;
      var $current=index+1;
      var $wizard=navigation.closest('.card-wizard');
      if($current>=$total){$($wizard).find('.btn-next').hide();
      $($wizard).find('.btn-finish').show();
      }
      else{
        $($wizard).find('.btn-next').show();
        $($wizard).find('.btn-finish').hide();
      }
      var move_distance=100/$total;
      move_distance=move_distance*(index)+move_distance/2;
      $wizard.find($('.progress-bar')).css({width:move_distance+'%'});
      $wizard.find($('.card-wizard .nav-pills li .nav-link.active')).addClass('checked');
    }
  });
  
  $("#wizard-picture").change(function(){
    readURL(this);
  });

  $('[data-toggle="wizard-radio"]').click(function(){
    wizard=$(this).closest('.card-wizard');
    wizard.find('[data-toggle="wizard-radio"]').removeClass('active');
    $(this).addClass('active');
    $(wizard).find('[type="radio"]').removeAttr('checked');
    $(this).find('[type="radio"]').attr('checked','true');
  });
  
  $('[data-toggle="wizard-checkbox"]').click(function(){
    if($(this).hasClass('active')){
      $(this).removeClass('active');
      $(this).find('[type="checkbox"]').removeAttr('checked');
    }
    else{
      $(this).addClass('active');
      $(this).find('[type="checkbox"]').attr('checked','true');
    }
  });
  $('.set-full-height').css('height','auto');
  function readURL(input){
    if(input.files&&input.files[0]){
      var reader=new FileReader();
      reader.onload=function(e){
        $('#wizardPicturePreview').attr('src',e.target.result).fadeIn('slow');
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
}
initNowUiWizard();
