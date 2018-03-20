<script>
var app = angular.module('App', []);
  app.controller('Ctrl', function($scope) {
    $scope.first_name= "John";
    $scope.second_name= "Kimani";
    $scope.title= "software engineer/ designer";
    $scope.telephone= "0724942245";
    $scope.email= "kimpita9@gmail.com";
    $scope.address= "Tokyo koganei shi kajinocho 1-9-32";
    $scope.website= "http://localhost:8000/new";
    $scope.bar_code_url= "http://localhost:8000/new";
    //display variables
    $scope.active_shelf = 2;
    $scope.shelf_items = 2;
    $scope.active_card_shelf_item=1;
    $scope.active_cv_shelf_item=1;
    $scope.active_letter_shelf_item=1;
    $scope.active_website_shelf_item=1;
    //cv content
    $scope.cv_objective="It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.";
      //Experience
      $scope.cv_experience_title_1="Computer Programmer";
      $scope.cv_company_1="Excia East Africa Ltd";
      $scope.cv_company_address_1="Nairobi, Kenya -";
      $scope.cv_experience_start_date_1="Jan-2017 -";
      $scope.cv_experience_end_date_1="Feb-2018";
      $scope.cv_experience_item1_1="-The standard Lorem Ipsum passage, used since the 1500";
      $scope.cv_experience_item2_1="-Section 1.10.33 of de 'Finibus Bonorum et Malorum', written by Cicero in 45 BC";
      $scope.cv_experience_item3_1="-1914 translation by H. Rackham";

      $scope.cv_experience_title_2="Musician";
      $scope.cv_company_2="Tpf ";
      $scope.cv_company_address_2="Nairobi, Kenya -";
      $scope.cv_experience_start_date_2="Jan-2015 -";
      $scope.cv_experience_end_date_2="Feb-2019";
      $scope.cv_experience_item1_2="-The standard Lorem Ipsum passage, used since the 1500";
      $scope.cv_experience_item2_2="-Section 1.10.33 of de 'Finibus Bonorum et Malorum', written by Cicero in 45 BC";
      $scope.cv_experience_item3_2="-1914 translation by H. Rackham";
      $scope.cv_experience_2=0;

      $scope.cv_experience_title_3="Mukami";
      $scope.cv_company_3="Excia East Africa Ltd ";
      $scope.cv_company_address_3="Nairobi, Kenya -";
      $scope.cv_experience_start_date_3="Jan-2017 -";
      $scope.cv_experience_end_date_3="Feb-2018";
      $scope.cv_experience_item1_3="-The standard Lorem Ipsum passage, used since the 1500";
      $scope.cv_experience_item2_3="-Section 1.10.33 of de 'Finibus Bonorum et Malorum', written by Cicero in 45 BC";
      $scope.cv_experience_item3_3="-1914 translation by H. Rackham";
      $scope.cv_experience_3=0;

      $scope.cv_experience_title_4="mkimbizi";
      $scope.cv_company_4="Excia East Africa Ltd ";
      $scope.cv_company_address_4="Nairobi, Kenya -";
      $scope.cv_experience_start_date_4="Jan-2017 -";
      $scope.cv_experience_end_date_4="Feb-2018";
      $scope.cv_experience_item1_4="-The standard Lorem Ipsum passage, used since the 1500";
      $scope.cv_experience_item2_4="-Section 1.10.33 of de 'Finibus Bonorum et Malorum', written by Cicero in 45 BC";
      $scope.cv_experience_item3_4="-1914 translation by H. Rackham";
      $scope.cv_experience_4=0;

    $scope.cv_education_title="BSc. Information Technology";
    $scope.cv_education_univ="Dedan Kimathi university";
    //letter content
    $scope.letter_date = new Date();
    $scope.letter_to = "John Makasi";
    $scope.letter_to_org = "Nyeri waters and sewerage company";
    $scope.letter_to_add = "P.O BOX 86-20107 NYERI";
    $scope.letter_heading = "Re: Customer Service Representative Opening (Ref. ID: CS300-Denver)";
    $scope.letter_salutation = "Dear Ms. Nogo";
    $scope.letter_body = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
    $scope.letter_sign_off = "sincerely";
    //****website content*********//
    $scope.profession = "Programmer";
    $scope.location = "Njoro";
    $scope.main_pic = "img/profile.png";
    $scope.facebook_link = "img/profile.png";
    $scope.twitter_link = "img/profile.png";
    $scope.google_plus_link = "img/profile.png";
    $scope.linkedin_link = "img/profile.png";
    $scope.git_hub_link = "img/profile.png";
    $scope.tag_line_1 = "Hello, I'm Me";
    $scope.tag_line_2 = "A kondoo Based in here";
    //about section
    $scope.about_title = "About Mine";
    $scope.about_story_title = "A little brif ABOUT Me";
    $scope.about_story_title = "A little brif ABOUT Me";
    $scope.about_story = "Ultricies nisi voluptatem, illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo tempor dignissim at. e vitae dicta sunt explicabo nemo enim ipsam voluptatem. ipsum dolor sit amet, consectetur adipisicing elit.<br><br>sed do eiusmod temporincididunt ut labore et dolore magna aliqua. ab illo tempor dignissim at. e vitae dicta sunt explicabo nemo enim ipsa voluptatem.";
    $scope.resume_downloadable = 1;
    $scope.skill_title = "SKILLS";
    $scope.skill_1 = "Milking goats";
    $scope.skill_1_level = 90;
    $scope.skill_2 = "yapping";
    $scope.skill_2_level = 19;
    $scope.skill_3 = "Eating";
    $scope.skill_3_level = 29;
    $scope.skill_4 = "Making hay";
    $scope.skill_4_level = 09;
    //speciality areas
    $scope.speciality_title = "What i do";

    $scope.speciality_1 = "sijui";
    $scope.speciality_1_icon = "fa-mobile";
    $scope.speciality_1_text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text";

    $scope.speciality_2 = "UX / UI design";
    $scope.speciality_2_icon = "fa-book";
    $scope.speciality_2_text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text";

    $scope.speciality_3 = "Machine learning";
    $scope.speciality_3_icon = "fa-desktop";
    $scope.speciality_3_text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text";;

    $scope.speciality_4 = "Target";
    $scope.speciality_4_icon = "fa-envelope";
    $scope.speciality_4_text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text";

    //contact form section
    $scope.contact_section_title = "Drop me a message";
    $scope.contact_receiving_email = "nyau@nyau.com";
    $scope.contact_auto_reply_message = "dfgd";

    //Edit items variables
    $scope.edit_card = 0;
    $scope.edit_cv_basic = 0;
    $scope.edit_cv_objective = 0;
    $scope.edit_cv_experience = 0;
  });
</script>
