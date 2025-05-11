

  // settConfig()

  // function settConfig(){

  //   'use strict'

  //   $.ajax({

  //     url:'../html/action.php',
  //     method:'POST',
  //     dataType:'json',
  //     data:{
  //       action:'app_settings'
  //     },
  //     success:function(data){


        
  //       if(data.Dark_mode == "1"){

  //         var dm = true

  //         $('#dm').bootstrapSwitch('state', true)

  //         $('body').attr('data-theme', 'dark')

  //       }
  //       else{

  //         var dm = false

  //         $('#dm').bootstrapSwitch('state', false)

  //         $('body').attr('data-theme', 'light')
          
  //       }



  //       if(data.Fixed_sidebar == 1){

  //         var fs = true

  //         $('#fsb_switch').bootstrapSwitch('state', true)

  //       }

  //       else{

  //         var fs = false

  //         $('#fsb_switch').bootstrapSwitch('state', false)

  //       }



  //       if(data.Fixed_header == 1){

  //         var fh = true

  //         $('#fixed_h').bootstrapSwitch('state', true)
          
  //       }
  //       else{

  //         var fh = false

  //         $('#fixed_h').bootstrapSwitch('state', false)
  //       }



  //       if(data.Box_layout == 1){

  //         var bl = true

  //         $('#boxLayout').bootstrapSwitch('state', true)


  //       }
  //       else{

  //         var bl = false

  //         $('#boxLayout').bootstrapSwitch('state', false)

  //       }



        // if(data.Logo_skin != null){

        //   $('#navbar-header').attr('data-logobg', data.Logo_skin)
        // } 



        // if(data.Navbar_skin != null){

        //   $('#main-wrapper').attr('data-navbarbg', data.Navbar_skin)
        //   $('#navbarSupportedContent').attr('data-navbarbg', data.Navbar_skin)
        //   $('.topbar').attr('data-navbarbg', data.Navbar_skin)
        // }


  //       $('#main-wrapper').AdminSettings({

  //         Theme: dm, // this can be true or false ( true means dark and false means light ),
  //         Layout: 'vertical',
  //         LogoBg: data.Logo_skin, // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
  //         NavbarBg: data.Navbar_skin, // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
  //         SidebarType: data.Sidebar_type, // You can change it full / mini-sidebar / iconbar / overlay
  //         SidebarColor: data.Sidebar_skin, // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
  //         SidebarPosition: fs, // it can be true / false ( true means Fixed and false means absolute )
  //         HeaderPosition: fh, // it can be true / false ( true means Fixed and false means absolute )
  //         BoxedLayout: bl // it can be true / false ( true means Boxed and false means Fluid )''
          
  //       })



  //       if(data.Sidebar_type == 'full'){

  //         $('#fullsidebar').prop("checked", true)

  //       }

  //       else if(data.Sidebar_type == 'mini-sidebar'){

  //         $('#minisidebar').prop("checked", true)
          
  //       }

  //       else if(data.Sidebar_type == 'iconbar'){

  //         $('#iconbar').prop("checked", true)
          
  //       }

  //       else if(data.Sidebar_type == 'overlaybar'){

  //         $('#overlaybar').prop("checked", true)
          
  //       }


        

  //     }

  //   })

  // }

  $(function() {

    'use strict';

    $('#main-wrapper').AdminSettings({

      Theme: false, // this can be true or false ( true means dark and false means light ),
      Layout: 'vertical',
      LogoBg: 'skin5', // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
      NavbarBg: 'skin6', // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
      SidebarType: 'full', // You can change it full / mini-sidebar / iconbar / overlay
      SidebarColor: 'skin5', // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
      SidebarPosition: true, // it can be true / false ( true means Fixed and false means absolute )
      HeaderPosition: true, // it can be true / false ( true means Fixed and false means absolute )
      BoxedLayout: false // it can be true / false ( true means Boxed and false means Fluid )

    });

  });

