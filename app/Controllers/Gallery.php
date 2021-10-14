<?php

namespace App\Controllers;

class Gallery
{

  public function __construct($type)
  {
    switch ($type) {
      case 'uxui':
        $this->uxui();
        break;
      case 'mobile':
        $this->mobile();
        break;
      case 'web':
        $this->web();
        break;
      case 'landing':
        $this->landing();
        break;
    }
  }

  /* for uxui page */
  public function uxui()
  {
    /* for uxui mobile_us section */
    $mobile_ui_images = [
      ['id' => '1', 'title' => 'Grab Food Design', 'img' => ['image_1' => '/assets/images/Service Details/Ux Ui/grab_1.PNG', 'image_2' => '/assets/images/Service Details/Ux Ui/grab_2.PNG']],
      ['id' => '2', 'title' => 'Food Panda Redesign', 'img' => ['image_1' => '/assets/images/Service Details/Ux Ui/foodpanda.png']],
      ['id' => '3', 'title' => 'Nike', 'img' => ['image_1' => '/assets/images/Service Details/Ux Ui/nike.png']],
      ['id' => '4', 'title' => 'Book Store', 'img' => ['image_1' => '/assets/images/Service Details/Ux Ui/Book Store.PNG']],
    ];

    /* for uxui web_ui section */
    $web_ui_images = [
      ['id' => '5', 'title' => 'Nike Website', 'img' => ['image_1' => '/assets/images/Service Details/Ux Ui/nike_1.png', 'image_2' => '/assets/images/Service Details/Ux Ui/nike_2.JPEG']],
    ];

    /* for uxui wire_frame section */
    $wire_frame_images = [
      ['id' => '6', 'title' => 'Bilions Mobile App Wireframe', 'img' => ['image_1' => '/assets/images/Service Details/Ux Ui/BilionsMobile.jpg']],
      ['id' => '7', 'title' => 'Grab Food Mobile App Wireframe', 'img' => ['image_1' => '/assets/images/Service Details/Ux Ui/BilionsFood.png']],
    ];
    render('services.uxui', compact('mobile_ui_images', 'web_ui_images', 'wire_frame_images'));
  }

  /* for mobile page */
  public function mobile()
  {
    $images = [
      ['id' => '1', 'title' => 'Go Thainland Travel Platform', 'img' => ['image_1' => '/assets/images/Service Details/Mobile App/mobile_1.png', 'image_2' => '/assets/images/Service Details/Mobile App/mobile_2.png', 'image_3' => '/assets/images/Service Details/Mobile App/mobile_3.jpg', 'image_4' => '/assets/images/Service Details/Mobile App/mobile_4.jpg', 'image_5' => '/assets/images/Service Details/Mobile App/mobile_5.jpg', 'image_6' => '/assets/images/Service Details/Mobile App/mobile_6.jpg',]],
    ];
    render('services.mobileapp', compact('images'));
  }

  /* for web dev page */
  public function web()
  {
    $images = [
      ['id' => '1', 'title' => 'Befeni Production', 'img' => ['image_1' => '/assets/images/Service Details/Web App/befini_1.png', 'image_2' => '/assets/images/Service Details/Web App/befini_2.png']],
      ['id' => '2', 'title' => 'Dokito', 'img' => ['image_1' => '/assets/images/Service Details/Web App/dokito_1.png', 'image_2' => '/assets/images/Service Details/Web App/dokito_2.png', 'image_3' => '/assets/images/Service Details/Web App/dokito_3.png']],
      ['id' => '3', 'title' => 'EZY Accounting', 'img' => ['image_1' => '/assets/images/Service Details/Web App/ezy.png',]],
      ['id' => '4', 'title' => 'My Keep', 'img' => ['image_1' => '/assets/images/Service Details/Web App/mykeep_1.png', 'image_2' => '/assets/images/Service Details/Web App/mykeep_2.png']],
      ['id' => '5', 'title' => 'Nemolina', 'img' => ['image_1' => '/assets/images/Service Details/Web App/nemolina_1.png', 'image_2' => '/assets/images/Service Details/Web App/nemolina_2.png','image_3' => '/assets/images/Service Details/Web App/nemolina_3.png','image_4' => '/assets/images/Service Details/Web App/nemolina_4.png','image_5' => '/assets/images/Service Details/Web App/nemolina_5.png','image_6' => '/assets/images/Service Details/Web App/nemolina_6.png','image_7' => '/assets/images/Service Details/Web App/nemolina_7.png',]],
      ['id' => '6', 'title' => 'Prop Texx', 'img' => ['image_1' => '/assets/images/Service Details/Web App/Protexx_1.png', 'image_2' => '/assets/images/Service Details/Web App/Protexx_2.png','image_3' => '/assets/images/Service Details/Web App/Protexx_3.png', 'image_4' => '/assets/images/Service Details/Web App/Protexx_4.png',]],
      ['id' => '7', 'title' => 'Recycling', 'img' => ['image_1' => '/assets/images/Service Details/Web App/recycling.png',]],
      ['id' => '8', 'title' => 'Work Flow AM', 'img' => ['image_1' => '/assets/images/Service Details/Web App/workflow_1.png', 'image_2' => '/assets/images/Service Details/Web App/workflow_2.png',]],
      ['id' => '9', 'title' => 'Capture Expert', 'img' => ['image_1' => '/assets/images/Service Details/Web App/Capture Expert.png', 'image_2' => '/assets/images/Service Details/Web App/Capture Expert_1.png',]],
      
    ];
    render('services.webapp', compact('images'));
  }

  /* for landing page */
  public function landing()
  {
    $images = [
      ['id' => '1', 'title' => 'Green Dale', 'img' => ['image_1' => '/assets/images/Service Details/Landing Web/GreenDale.png', 'image_2' => '/assets/images/Service Details/Landing Web/GreenDale_2.png']],
      ['id' => '2', 'title' => 'HarMon Oak', 'img' => ['image_1' => '/assets/images/Service Details/Landing Web/HarMonOak.png', 'image_2' => '/assets/images/Service Details/Landing Web/HarMonOak_2.png']],
      ['id' => '3', 'title' => 'Harper', 'img' => ['image_1' => '/assets/images/Service Details/Landing Web/HarPer.png', 'image_2' => '/assets/images/Service Details/Landing Web/HarPer_2.png']],
      ['id' => '4', 'title' => 'Summit', 'img' => ['image_1' => '/assets/images/Service Details/Landing Web/Summit.png', 'image_2' => '/assets/images/Service Details/Landing Web/Summit_1.png', 'image_3' => '/assets/images/Service Details/Landing Web/Summit_2.png',]],
      ['id' => '5', 'title' => 'Vista', 'img' => ['image_1' => '/assets/images/Service Details/Landing Web/Vista.png', 'image_2' => '/assets/images/Service Details/Landing Web/Vista_2.png',]],
      
    ];
    render('services.landingweb', compact('images'));
  }
}
