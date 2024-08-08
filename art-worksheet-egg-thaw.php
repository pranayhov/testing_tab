<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Worksheet Egg Thaw</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>RSMC CRM Lab V1</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/chartist.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/prism.css">
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/date-picker.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
<!-- Remix Icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css">

</head>
<body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap');
    * {
        font-family: "Montserrat", sans-serif;
        font-optical-sizing: auto;
        font-weight: 500;
        font-style: normal;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
        font-size: 12px;
    }

    body{
        width: 100%;
        padding: 15px;

    }

    .page-body{
        border: 1px solid red;
        height: 200vh;
    }

    .ld-flex-row{
        /* border: 1px solid green; */
        
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        padding: 0px 10px;
        margin-top: 5px;
      
    }
    .ld-flex-row-inner {
        display: flex;
        flex-wrap: wrap;
        
    }

    .ld-flex-col-10{
        /* border: 1px solid blue; */
        width:100%;
    }
    
    .ld-flex-col-8{
        /* border: 1px solid blue; */
        width: 80%;
    }

    .ld-flex-col-5{
        /* border: 1px solid blue; */
        width: 50%;
    }

    .ld-flex-col-4-5{
         /* border: 1px solid blue; */
        width: 45%;
    }

    .ld-flex-col-4{
        /* border: 1px solid blue; */
        width: 40%;
    }

    .ld-flex-col-3-5{
        /* border: 1px solid blue; */
        width: 35%;
    }
    .ld-flex-col-3-3{
        width: 33.33%;
    }

    .ld-flex-col-3{
        /* border: 1px solid blue; */
        width: 30%;
    }

    .ld-flex-col-2-5{
        /* border: 1px solid blue; */
        width: 25%;
    }

    .ld-flex-col-1-7-5{
        width: 17.5%;
    }
    .ld-flex-col-1-5{
        width: 15%;
    }

    .ld-flex-col-2{
        /* border: 1px solid blue; */
        width: 20%;
    }

    .ld-flex-col-1-4-2{
        width: 14.286%;
    }

    .ld-flex-col-1{
        /* border: 1px solid blue; */
        width: 10%;
    }

    .ld-flex-col-0-8-3{
        width: 8.33%;
    }

    .ld-flex-col-0-6-6{
        width: 6.6%;
    }

    .ld-flex-col-0-5{
        width: 5%;
    }




    /* 1st heading part  */
    .form-heading,
    .form-btn{
        display: flex;
        min-height: 35px;
        align-items: center;
    }

    
    /* 2nd heading part  */
    .form-sub-heading,
    .form-page{
        display: flex;
    }

    

    .form-heading,
    .form-sub-heading{
        justify-content: flex-start;
    }

    .form-btn,
    .form-page{
        justify-content: flex-end;
    }


     /* 1st heading part  */
    .form-heading h1{
        font-size: 16px;
        font-weight: 600;
        color: blue;
    }
    .form-btn button{
        font-size: 13px;
        border: none;
        background: red;
        border-radius: 67%;
        width: 30px;
        height: 30px;
    }
    .form-btn i{
        font-size: 18px;
        font-weight: 600;
        color: #fff;
    }

    /* 2nd heading part  */
    .form-sub-heading p{
        font-size: 12px;
    }
    .form-page p{
        font-size: 12px;
        font-weight: 600;
    }



    
    /* table css  */
    .table-container{
        border: 2px solid black;
        padding: 0;
    }

    .table-2{
        background-color: #ffffcc ;
    }
    .table-2 > div:nth-child(1){
        background-color: #ffffcc  !important;
    }
    .table-3 > div:nth-child(1),
    .table-3 > div:nth-child(2){
        background-color: #ff66ff  !important;
    }
    .table-3 > div:nth-child(3),
    .table-3 > div:nth-child(4){
        background-color: #ebffff  !important;
    }

    .td-form{
        min-height: 150px;
        align-items: center !important; 
    }
    .td-form-2{
       
        min-height: 128px;
        align-items: center !important;
        
    }
    .td-form-3{
       
        min-height: 135px;
        align-items: center !important;
        
    }
    .td-form-4{
       
        min-height: 328px;
        align-items: center !important;
        
    }

    .td-form-5{
        min-height: 200px;
        align-items: center !important;
    }


    .table-container > div{
        border: 1px solid black;
        
    }

    .table-container > div:nth-child(1){
        background-color: #ff66ff;
    }


    .ld-flex-row-inner > div{
        padding: 5px;
    }

    .ld-flex-row-inner input[type="text"],
    .ld-flex-row-inner input[type="date"],
    .ld-flex-row-inner input[type="time"] {
        width:100%;
    }

    .ld-flex-row-inner label {
        min-width:80px;
    }
    

    



    /*specific css*/
    .cycle-type-headings-egg-thaw-con p{
        text-align:center;
        font-size:16px;
        font-weight:700;
        line-height: 0.8rem;
    }
    .cycle-type-headings-egg-thaw-con .ld-flex-col-10:nth-of-type(1) p{
        text-align:left;
        margin-top:18px;
    }
   
    .cycle-type-headings-egg-thaw-con label{
        color: red;
        position: absolute;
        top: -2.5rem;
        left: 10rem;
    }
    .cycle-type-headings-egg-thaw-con input{
        border:none;
        background:transparent;
        border-bottom:2px solid red;
        margin-bottom: 15px;
        
    }
    .cycle-type-headings-egg-thaw-con input:focus{
        border:none;
        border-bottom:2px solid red;
        outline: none; 
        box-shadow: none; 
    }







    .patient-details > div{
        margin-top:5px; 
    }

    .patient-details label{
        margin-right:10px !important;
    }
    .patient-details div:nth-child(1) label{
        margin-right:2px !important;
    }

    .patient-details input{
        width: 136px !important;
        padding-left: 10px;
        padding-right: 10px;
        border: none;
        outline: none;
        height: 30px;
        border-radius: 8px;
        
    }
    .patient-details div:nth-child(1) input{
        width: 378px !important;
        
    }







    .patient-partner-details > div{
        margin-top:5px;
    }

    .patient-partner-details label {
        margin-right:20px !important;
    }

    .patient-partner-details input{
        width: 350px !important;
        padding-left: 10px;
        padding-right: 10px;
        border: none;
        outline: none;
        height: 30px;
        border-radius: 8px;
    }

    .patient-partner-details div:nth-child(3) input{
        margin-left:10px;
    }







    .incubator-con div:nth-child(1){
        display:flex;
        flex-direction:column;
        align-items:center;
        justify-content:center;
        border-bottom:1px solid black;
    }
    .incubator-con div:nth-child(1) p{
        font-size:18px;
        font-weight: 700;
    }

    .incubator-con input{
            padding-left: 10px;
            padding-right: 10px;
            border: none;
            outline: none;
            height: 70px;
            border-radius: 8px;
            margin-top: 5px;
    }




    .primary-dr-con > div{
        margin-top:5px;
    }
    .primary-dr-con input{
        width: 280px !important;
        padding-left: 10px;
        padding-right: 10px;
        border: none;
        outline: none;
        height: 30px;
        border-radius: 8px;
    }


    .oocyte-details > div {
        margin-top: 5px;
    }

    .oocyte-details input:not(.oocyte-details-inp) {
        width: 149px !important;
        margin-left: -35px;
        padding-left: 10px;
        padding-right: 2px;
        border: none;
        outline: none;
        height: 30px;
        border-radius: 8px;
    }
    .oocyte-details-inp{
        width: 107px !important;
        padding-left: 10px;
        padding-right: 5px;
        border: none;
        outline: none;
        height: 30px;
        border-radius: 8px;
    }
    .oocyte-details input[type="checkbox"]{
        position:absolute;
        position: absolute;
        top: 0px;
        left: 93px;
        width: 17px !important;
    }



    .sperm-details-con > div {
        margin-top:5px;
    }

    .sperm-details-con input[type="date"] {
        width:155px !important;
        padding-left: 10px;
        padding-right: 10px;
        border: none;
        outline: none;
        height: 30px;
        border-radius: 8px;
    }

    .sperm-details-con input[type="checkbox"] {
        position:relative;
        left:-2.5rem;
        top: 2px;
    }




    .thaw-big-con input{
        width:220px !important;
        margin-left:-40px;
        padding-left: 10px;
        padding-right: 10px;
        border: none;
        outline: none;
        height: 30px;
        border-radius: 8px;
    }

    .thaw-big-con p{
        font-size:14px;
        border-bottom: 1px solid #545454;
        font-weight:700;
    }





    .thaw-container  p,
    .thaw-container  label{
        font-size:12px;
        font-weight:700;
        min-height:55px;

    }

    .thaw-container input{
        padding-left: 2px;
        padding-right: 2px;
        border: none;
        outline: none;
        height: 30px;
        border-radius: 8px;
        
    }


    .bx-cryo-details-con label{
        font-size: 12px !important;
        font-weight:600;
    }

    .bx-cryo-details-con p,
    .bx-cryo-details-con span{
        font-size: 12px !important;
        font-weight:600;
    }

    .bx-cryo-details-con input[type='text']{
        width:100px;
        margin:0px 10px;
        padding-left: 2px;
        padding-right: 2px;
        border: none;
        outline: none;
        height: 30px;
        border-radius: 8px;
    }


    .psg-pgd-lab-con p{
        font-size:18px;
        font-weight:700;
        text-decoration:underline;
    }
    .psg-pgd-lab-con label{
        min-width: 55px;
    }

    .psg-pgd-lab-con > div:nth-child(2) input,
    .psg-pgd-lab-con > div:nth-child(3) input{
        width:255px !important;
    }

    .psg-pgd-lab-con  input{
        width:90px !important;
        padding-left: 10px;
        padding-right: 5px;
        border: none;
        outline: none;
        height: 30px;
        border-radius: 8px;
    }





    .sperm-prep-con p{
        font-size: 16px;
        font-weight: 700;
        text-decoration: underline;
        margin-bottom: 1px;
    }

    .sperm-prep-con input[type='checkbox']{
        margin-left:5px;
        margin-right:10px;
    

    }

    .sperm-prep-con input:not(input[type='checkbox']){
        width:100% !important;
        padding-left: 10px;
        padding-right: 5px;
        border: none;
        outline: none;
        height: 30px;
        border-radius: 8px;
    }

    .sperm-prep-con > div:nth-child(2),
    .sperm-prep-con > div:nth-child(3),
    .sperm-prep-con > div:nth-child(4),
    .sperm-prep-con > div:nth-child(5){

        margin-bottom:-8px;
        
    }



    .sperm-calc-main-con > div:nth-child(1) p{
        font-size: 14px;
        font-weight:700;
        position:relative;
        top:5rem;
        left:5px;
        margin-bottom:15px;
    }

    .sperm-calc p{
        font-size:10px;
        text-decoration:underline;
        font-weight:800;
        text-align: left;
        min-height:35px;
    }

    .sperm-calc input:not(input[type='checkbox']){
        width: calc( 30% + 45px) !important;
        padding-left: 10px;
        padding-right: 5px;
        border: none;
        outline: none;
        height: 25px;
        border-radius: 8px;
    }

    .sperm-calc > div:nth-child(5),
    .sperm-calc > div:nth-child(6),
    .sperm-calc > div:nth-child(7){
        margin-top: 10px;
    }

    .sperm-calc > div:nth-child(2) label,
    .sperm-calc > div:nth-child(3) label,
    .sperm-calc > div:nth-child(4) label{
        font-size: 10px;
        position: relative;
        left: 90px;
        top: -22px;
        
    }

    .sperm-calc > div:nth-child(2),
    .sperm-calc > div:nth-child(3),
    .sperm-calc > div:nth-child(4){
        margin-bottom:-22px;
        
    }

    .td-form-4 {
        min-height:245px !important;
    }




    .table-4  div {
        background: #f3f3f3 !important;  
    }


    .cryopreservation-main-con > div{
        padding:0 !important;
        margin:0 !important;
    }
    .cryopreservation-sub-con > div{
        border:1px solid #545454;
    }

    .cryopreservation-main-con > div p{
        text-align:center;
        font-size:12px;
        font-weight:700;
        margin-bottom:2px;
    }

    .cryopreservation-main-con > div:nth-child(1) p{
        font-size:14px;
    }

    .cryopreservation-main-con input[type='text']{
        padding-left: 10px;
        padding-right: 5px;
        border: none;
        outline: none;
        width:100%;
        height: 30px;
        border-radius: 8px;
    }

    .cryopreservation-main-con input[type='checkbox']{
        margin-right:15px;
        position:relative;
        top:3px;
        left:5px;
    
    }
            
    @media screen and (max-width:1920px){

        .td-form-2 {
            min-height: 106px;
        }
        .patient-details input {
            width: 215px !important;
        }

        .patient-details div:nth-child(1) input {
            width: 543px !important;
        }

        .patient-partner-details input {
            width: 525px !important;
        }

        .oocyte-details input:not(.oocyte-details-inp) {
            width: 149px !important;
            margin-left: -35px;
        }
        .oocyte-details-inp{
            width: 107px !important;
        }
        .oocyte-details input[type="checkbox"]{
            position: absolute;
            top: 0px;
            left: 98px;
            width: 20px !important;
        }

        .sperm-details-con input[type="date"] {
            width: 238px !important;
        }
        .sperm-details-con div:nth-child(3) input[type="checkbox"] {
            left: -3.5rem;
           
        }

        .thaw-big-con input {
            width: 320px !important;
        }

        .bx-cryo-details-con label{
            font-size: 14px !important;
            font-weight:600;
        }

        .bx-cryo-details-con p,
        .bx-cryo-details-con span{
            font-size: 14px !important;
            font-weight:600;
        }

        .psg-pgd-lab-con p {
            margin-bottom: -6px;
        }


        .sperm-calc > div:nth-child(2), .sperm-calc > div:nth-child(3), .sperm-calc > div:nth-child(4) {
            margin-bottom: 0px;
        }

        .sperm-calc > div:nth-child(2) label, .sperm-calc > div:nth-child(3) label, .sperm-calc > div:nth-child(4) label {
            font-size: 12px;
            position: relative;
            left: 10px;
            top: 0px;
        }

        .sperm-calc > div:nth-child(5), .sperm-calc > div:nth-child(6), .sperm-calc > div:nth-child(7) {
            margin-top: 8px;
        }

    
        .sperm-calc-main-con > div:nth-child(1) p {
            
            left: 25px;
        
        }
    }

    @media screen and (max-width:1440px){
        .patient-details div:nth-child(1) input {
            width: 375px !important;
        }

        .patient-details input {
            width: 131px !important;
        }

        .patient-partner-details input {
            width: 358px !important;
        }

        .primary-dr-con input {
            width: 180px !important;
        }

        .oocyte-details input:not(.oocyte-details-inp) {
            width: 94px !important;
            margin-left: -34px;
        }
        .oocyte-details-inp {
            width: 49px !important;
        }
        .oocyte-details input[type="checkbox"] {
            position: absolute;
            position: absolute;
            top: 0px;
            left: 93px;
            width: 17px !important;
        }


        .sperm-details-con div:nth-child(3) input[type="checkbox"] {
            left: -3.5rem;
           
        }

        .sperm-details-con input[type="date"] {
            width: 152px !important;
        }


        .thaw-big-con input {
            width: 220px !important;
        }

        .psg-pgd-lab-con > div:nth-child(2) input,
        .psg-pgd-lab-con > div:nth-child(3) input{
            width:170px !important;
        }

        .psg-pgd-lab-con input {
            width: 50px !important;
        }
        .psg-pgd-lab-con p {
            margin-bottom: -6px;
        }

        .sperm-calc > div:nth-child(2) label, .sperm-calc > div:nth-child(3) label, .sperm-calc > div:nth-child(4) label {
            font-size: 10px;
            position: relative;
            left: 95px;
            top: -22px;
        }

        .sperm-calc > div:nth-child(2), .sperm-calc > div:nth-child(3), .sperm-calc > div:nth-child(4) {
            margin-bottom: -20px;
        }

        .td-form-4 {
            min-height: 245px !important;
        }

    }

    @media screen and (max-width:1024px){

        .td-form {
            min-height: 150px;
        }

        .td-form-2 {
            min-height: 115px;
        }
        .td-form-3 {
            min-height: 115px;
        }
        .td-form-4 {
            min-height: 300px !important;
        }

        .patient-details div:nth-child(1) input {
            width: 235px !important;
        }
        .patient-details input {
            width: 62px !important;
        }

        .patient-partner-details input {
            width: 215px !important;
        }

        .patient-details > div:nth-child(3) input,
        .patient-details > div:nth-child(5) input{
            width: 92px !important;
        }

        .incubator-con div:nth-child(1) p {
            font-size: 13px;
            font-weight: 700;
        }

        .cycle-type-headings-egg-thaw-con label {
            color: red;
            position: absolute;
            top: -2.3rem;
            left: 10rem;
            font-size: 9px;
        }


        .oocyte-details input:not(.oocyte-details-inp) {
            width: 60px !important;
            margin-left: -39px;
        }
        .oocyte-details-inp {
            width: 100px !important;
        }
        .oocyte-details input[type="checkbox"] {
            position: absolute;
            top: 0px;
            left: 100px;
            width: 14px !important;
        }
        .oocyte-details div:nth-child(1) label {
            margin-top:5px;
        }

        .oocyte-details div:nth-child(3) input,
        .oocyte-details div:nth-child(6) input {
                width: 65px !important;
        }
        .oocyte-details div:nth-child(3) label,
        .oocyte-details div:nth-child(6) label {
                min-width:70px ;
        }
        .oocyte-details div:nth-child(6) label,
        .oocyte-details div:nth-child(6) input{
            margin-top:-6px !important;
        }

        .patient-details > div:nth-child(3) label,
        .patient-details > div:nth-child(5) label{
            min-width:50px !important;
        }



        .sperm-details-con input[type="date"] {
            width: 82px !important;
        }

        .sperm-details-con div:nth-child(3) input[type="checkbox"] {
            left: 3.5rem;
            top: -1.7rem;
        }

        .sperm-details-con input[type="checkbox"] {
            position: relative;
            left: 4.4rem;
            top: -22px;
        }

        .sperm-details-con p {
            font-size:10px !important;
            min-width:100px;
            font-weight:800;
            margin-top: 5px;
        }

        .sperm-details-con > div:nth-child(2),
        .sperm-details-con > div:nth-child(3){
            margin-top: 11px;
            position: relative; 
            left: 15px;
        }

        .thaw-big-con input {
            width: 140px !important;
        }
        .thaw-container p, .thaw-container label {
            font-size: 9px;
            font-weight: 700;
            min-height: 58px;
        }
        .thaw-big-con > div {
            padding: 2px;
        }

        .bx-cryo-details-con label{
            font-size: 12px !important;
            font-weight:600;
        }

        .bx-cryo-details-con p,
        .bx-cryo-details-con span{
            font-size: 12px !important;
            font-weight:600;
        }

        .psg-pgd-lab-con > div:nth-child(2) input, .psg-pgd-lab-con > div:nth-child(3) input {
            width: 105px !important;
        }
        .psg-pgd-lab-con label {
            min-width: 50px;
            font-size: 10px;
        }
        .psg-pgd-lab-con input {
            width: 75px !important;
            
        }
        .psg-pgd-lab-con p {
            font-size: 13px;
            font-weight: 700;
            text-decoration: underline;
            margin-bottom: -4px;
        }

        .sperm-calc-main-con > div:nth-child(1) p {
            left: 8px;
        }

        .sperm-calc > div:nth-child(2) label, .sperm-calc > div:nth-child(3) label, .sperm-calc > div:nth-child(4) label {
            font-size: 8px;
            position: relative;
            left: 66px;
            top: -25px;
        }

        .sperm-calc p {
            font-size: 8px;
        }

        .sperm-calc-main-con > div:nth-child(1) p {
            left: 2px;
            font-size: 12px;
        }

        .sperm-calc > div:nth-child(2), .sperm-calc > div:nth-child(3), .sperm-calc > div:nth-child(4) {
            margin-bottom: -25px;
        }

        .sperm-calc {
            margin-left:-20px;
        }

        .sperm-calc input:not(input[type='checkbox']) {
            width: calc(30% + 30px) !important;
        }

        .accept-decline label {
            min-width:54px;
        }
        .accept-decline{
            display:flex;
            flex-direction:row;
            align-items:center;
        }

        .accept-decline input {
        margin-top:-13px;
        }

    }

    @media screen and (max-width:768px){
        /* 1st */
        .form-heading,
        .form-btn{
            min-height: 35px;
        }

        .form-heading h1{
            font-size: 14px;
            font-weight: 600;
        }

        .form-btn button{
            font-size: 10px;
            width: 25px;
            height: 25px;
        }

        .form-btn i{
            font-size: 15px;
            font-weight: 500;
            color: #fff;
        }
        /* 2nd */

        .form-sub-heading,
        .form-page{
            min-height: 55px;
        }

        .form-sub-heading p{
            font-size: 10px;
        }
        .form-page p{
            font-size: 10px;
        }


        .td-form{
            min-height: 190px;
            align-items: center !important; 
        }
        .td-form-2 {
            min-height: 150px;
        }
        .td-form-3 {
            min-height: 115px;
        }

        .ld-flex-col-0-5{
           width: 14.28%;
         }


         .cycle-type-headings-egg-thaw-con label {
            position: absolute;
            top: -1.3rem;
            left: 0.6rem;
        }
        .cycle-type-headings-egg-thaw-con p{
            line-height: 1.5rem;
        }
        .cycle-type-headings-egg-thaw-con input{
            
            margin-bottom: 10px;
            
        }

        .patient-details div:nth-child(1) input {
            width: 147px !important;
        } 
        .patient-details input {
            width: 112px !important;
        }

        .patient-partner-details input {
            width: 143px !important;
        }
        .patient-partner-details label {
            margin-right: 5px !important;
        }

        .patient-details > div:nth-child(3) input, .patient-details > div:nth-child(5) input {
            width: 110px !important;
        }



        .incubator-con div:nth-child(1) p{
            font-size:12px;
            font-weight: 700;
        }


        .primary-dr-con input {
            width: 132px !important;
        }


        .oocyte-details input:not(.oocyte-details-inp) {
            width: 75px !important;
            margin-left: -4px;
        }
        .oocyte-details-inp {
            width: 75px !important;
        }

        .oocyte-details div:nth-child(3) input, .oocyte-details div:nth-child(6) input {
            width: 75px !important;
        }

        .oocyte-details label{
            font-size: 9px !important;
        }
        .oocyte-details input[type="checkbox"] {
            position: absolute;
            position: absolute;
            top: 0px;
            left: 61px;
            width: 14px !important;
        }
        .oocyte-details div:nth-child(1) label {
            margin-top: 2px;
        }
        .oocyte-details > div:nth-child(4),
        .oocyte-details > div:nth-child(5){
            margin-top: 25px !important;
        }

        .thaw-container p, .thaw-container label {
            font-size: 12px;
            font-weight: 700;
            min-height: 58px;
        }


        .sperm-details-con input[type="date"] {
            width: 115px !important;
        }

        .sperm-details-con input[type="checkbox"] {
            position: relative;
            left: 4.1rem;
            top: -22px;
        }

        .sperm-details-con div:nth-child(3) input[type="checkbox"] {
            left: 3.2rem;
            /* top: -22px; */
        }

        .sperm-details-con p{
            font-size:12px !important;
            font-weight:700;
        }

        .sperm-details-con label{
            font-size:11px !important;
            font-weight:500;
        }

        .sperm-details-con > div:nth-child(2),
        .sperm-details-con > div:nth-child(3){
            position: relative;
            left: 3px;
            top: 23px;  
        }

        .sperm-details-con p {
            font-size: 11px !important;
            font-weight: 700;
            margin-top: -1px;
        }


        .thaw-big-con input {
            width: 160px !important;
        }
        .s-con-1{
            width: 10% !important;
        }
        .s-con-2{
            width: 30% !important;
        }
        .s-con-3{
            width: 60% !important;
        }

        .bx-cryo-details-con label{
            font-size: 10px !important;
            font-weight:600;
        }

        .bx-cryo-details-con p,
        .bx-cryo-details-con span{
            font-size: 10px !important;
            font-weight:600;
        }

        .psg-pgd-lab-con input {
            width: 50px !important;
        }

        .psg-pgd-lab-con > div:nth-child(2) input, .psg-pgd-lab-con > div:nth-child(3) input {
            width: 60px !important;
        }


        
        .sperm-prep-con > div:nth-child(6),
        .sperm-prep-con > div:nth-child(7){

            width: 100% !important;
            
        }
        .sperm-prep-con p {
            font-size: 12px;
        }

        .sperm-calc p {
            font-size: 7px;
        }


        .sperm-calc {
            margin-left: -24px;
        }

        .sperm-calc-main-con > div:nth-child(1) p {
            left: 2px;
            font-size: 8px;
            margin-bottom: 22px;
        }

        .sperm-calc input:not(input[type='checkbox']) {
            width: calc(30% + 16px) !important;
        }

        .sperm-calc > div:nth-child(2) label, .sperm-calc > div:nth-child(3) label, .sperm-calc > div:nth-child(4) label {
            font-size: 8px;
            position: relative;
            left: 42px;
            top: -23px;
        }

        .sperm-calc > div:nth-child(5), .sperm-calc > div:nth-child(6), .sperm-calc > div:nth-child(7) {
            margin-top: 8px;
            margin-right: -10px;
        }

        .td-form-4 {
            min-height: 300px !important;
        }

        .cryopreservation-main-con > div p {
            font-size: 10px;
        }

        .cryopreservation-main-con input[type='checkbox'] {
            margin-right: 3px;
            position: relative;
            top: 3px;
            left: -2px;
        }
    }

</style>
<div class="page-body">

    <!-- 1st heading part -->
    <div class="ld-flex-row">
        <div class="ld-flex-col-5 form-heading">
            <h1>ART WORKSHEET - EGG THAW</h1>
        </div>
        <div class="ld-flex-col-5 form-btn">
            <button><i class="ri-close-circle-line"></i></button>
        </div>
    </div>

    <!-- 2st heading part -->
    <div class="ld-flex-row">
        <div class="ld-flex-col-8 form-sub-heading">
            <p>Embryology Laboratory at Coastal Fertility Medical Center  15500 Sand Canyon Ave, Ste 100, Irvine, CA 92618   Tel 949-726-0600 </p>
        </div>
        <div class="ld-flex-col-2 form-page">
            <p>PAGE 1</p>
        </div>
    </div>
    <!-- Table Part starts from here -->

    <div class="ld-flex-row table-container">
        <!-- 1st row  -->
        <div class="ld-flex-col-2 td-form">
            <div class="ld-flex-row-inner cycle-type-headings-egg-thaw-con">
                <div  class="ld-flex-col-10">
                    <p class="">CYCLE TYPE</p>
                </div>
                <div class="ld-flex-col-10">
                    <label for="">Confirmed By</label>
                    <input type="text" name="" id="" placeholder="Enter confirmed by">
                </div>
                <div class="ld-flex-col-10">
                        <p>Egg Thawing,</p>
                        <p>ICSI and Culture</p>
                </div>
            </div>
        </div>

        <div class="ld-flex-col-3-5 td-form"> 
            <div class="ld-flex-row-inner patient-details">
                <div  class="ld-flex-col-10">
                    <label for="">Patient Name:</label>
                    <input type="text" name="" id="" placeholder="Enter patient name">
                </div>
                <div class="ld-flex-col-5">
                    <label for="">Patient DOB:</label>
                    <input type="date" name="" id="">
                </div>
                <div class="ld-flex-col-5">
                    <label for="">AGE:</label>
                    <input type="text" name="" id="" placeholder="Enter age">
                </div>
                <div class="ld-flex-col-5">
                    <label for="">ART#:</label>
                    <input type="text" name="" id="" placeholder="Enter ART">
                </div>
                <div class="ld-flex-col-5">
                    <label for="">Cycle#:</label>
                    <input type="text" name="" id="" placeholder="Enter cycle">
                </div>
            </div>
            
        </div>

        <div class="ld-flex-col-3-5 td-form"> 
            <div class="ld-flex-row-inner patient-partner-details">
                <div  class="ld-flex-col-10">
                    <label for="">Patient Name:</label>
                    <input type="text" name="" id="" placeholder="Enter patient name">
                </div>
                <div class="ld-flex-col-10">
                    <label for="">Partner Name:</label>
                    <input type="text" name="" id="" placeholder="Enter partner name">
                </div>
                <div class="ld-flex-col-10">
                    <label for="">   <i class="ri-men-line"></i></label>
                    <input type="text" name="" id="" placeholder="Enter">
                </div>
            </div>
        </div>

        <div class="ld-flex-col-1 td-form"> 
            <div class="ld-flex-row-inner incubator-con">
                <div  class="ld-flex-col-10">
                    <p>Incubator</p>
                </div>
                <div class="ld-flex-col-10">
                    <input type="text" name="" id=""  placeholder="Type here..">
                </div>
            </div>
        </div>



        <!-- 2nd row  -->

        <div class="ld-flex-col-2 td-form-2">
            <div class="ld-flex-row-inner primary-dr-con">
                <div class="ld-flex-col-10">
                    <label for="">Primary Dr.</label>
                    <input type="text" name="" id="" placeholder="Enter primary Dr.">
                </div>
                
            </div>
        </div>

        <div class="ld-flex-col-3-5 td-form-2"> 
            <div class="ld-flex-row-inner oocyte-details">
                <div  class="ld-flex-col-3-3">
                    <label for="">Oocytes source:</label>
                    <input type="text" name="" id="" class="oocyte-details-inp" placeholder="Enter oocytes source">
                </div>
                <div  class="ld-flex-col-3-3">
                    <label for="">DNR#:</label>
                    <input type="text" name="" id="" placeholder="Enter DNR #">
                </div>
                <div class="ld-flex-col-3-3">
                    <label for="">AGE:</label>
                    <input type="text" name="" id="" placeholder="Enter age">
                </div>
                <div class="ld-flex-col-3-3">
                    <label for="">Patient:</label>
                    <input type="checkbox" name="" id="" placeholder="Enter patient">
                </div>
                <div class="ld-flex-col-3-3">
                    <label for="">Donor:</label>
                    <input type="checkbox" name="" id="" placeholder="Enter donor">
                </div>
                <div class="ld-flex-col-3-3">
                    <label for=""><i class="ri-women-line"></i></label>
                    <input type="text" name="" id="" placeholder="Type here ..">
                </div>
            </div>
            
        </div>

        <div class="ld-flex-col-4-5 td-form-2"> 
            <div class="ld-flex-row-inner sperm-details-con">
                <div  class="ld-flex-col-2">
                    <p for="">Sperm Source:</p>
                </div>
                <div  class="ld-flex-col-2">
                    <label for="">Patient</label>
                    <input type="checkbox" name="" id="">
                </div>
                <div  class="ld-flex-col-2">
                    <label for="">Fresh</label>
                    <input type="checkbox" name="" id="">
                </div>
                <div  class="ld-flex-col-4">
                    <label for="">Frozen Date:</label>
                    <input type="date" name="" id="">
                </div>


                <div  class="ld-flex-col-2">
                    <p for="">Donor:</p>
                </div>
                <div  class="ld-flex-col-4">
                    <label for="">Sperm Bank:</label>
                    <input type="date" name="" id="">
                </div>
                <div  class="ld-flex-col-4">
                    <label for="">Vial #</label>
                    <input type="date" name="" id="">
                </div>
                
            </div>
        </div>

       
    </div>


    <div class="ld-flex-row table-container table-2">
      <!-- 3rd row  -->
        <div class="ld-flex-col-0-5 td-form-3 s-con-1">
            <div class="ld-flex-row-inner thaw-container">
                
                <div class="ld-flex-col-10">
                    <p>THAW AND FERT</p>
                </div>
                
            </div>
        </div>
        <div class="ld-flex-col-2 td-form-3 s-con-2">
            <div class="ld-flex-row-inner thaw-container">
                
                <div class="ld-flex-col-10">
                    <label for="">THAW DATE</label>
                    <input type="date" name="" id="">
                </div>
                
            </div>
        </div>
        <div class="ld-flex-col-4 td-form-3 s-con-3">
            <div class="ld-flex-row-inner thaw-big-con">
                
                <div class="ld-flex-col-10">
                    <p>THAW ID Check</p>
                </div>
                <div class="ld-flex-col-5">
                    <label for="">Date:</label>
                    <input type="date" name="" id="">
                </div>
                <div class="ld-flex-col-5">
                    <label for="">Time:</label>
                    <input type="time" name="" id="">
                </div>
                <div class="ld-flex-col-5">
                    <label for="">Emb</label>
                    <input type="text" name="" id="">
                </div>
                <div class="ld-flex-col-5">
                    <label for="">Obs</label>
                    <input type="text" name="" id="">
                </div>
                
            </div>
        </div>
        <div class="ld-flex-col-0-5 td-form-3">
            <div class="ld-flex-row-inner thaw-container">
                
                <div class="ld-flex-col-10">
                    <label for="">Total <br>Thawed <br>Eggs</label>
                    <input type="text" name="" id="">
                </div>
                
                
            </div>
        </div>
        <div class="ld-flex-col-0-5 td-form-3">
            <div class="ld-flex-row-inner thaw-container">
                
                <div class="ld-flex-col-10">
                    <label for="">Survived</label>
                    <input type="text" name="" id="">
                </div>
                
            </div>
        </div>
        
        <div class="ld-flex-col-0-5 td-form-3">
            <div class="ld-flex-row-inner thaw-container">
                
                <div class="ld-flex-col-10">
                    <label for=""># MII</label>
                    <input type="text" name="" id="">
                </div>
                
            </div>
        </div>
        <div class="ld-flex-col-0-5 td-form-3">
            <div class="ld-flex-row-inner thaw-container">
                
                <div class="ld-flex-col-10">
                    <label for=""># MI</label>
                    <input type="text" name="" id="">
                </div>
                
            </div>
        </div>
        
        <div class="ld-flex-col-0-5 td-form-3">
            <div class="ld-flex-row-inner thaw-container">
                
                <div class="ld-flex-col-10">
                    <label for="">MI -> MII</label>
                    <input type="text" name="" id="">
                </div>
                
            </div>
        </div>
        <div class="ld-flex-col-0-5 td-form-3">
            <div class="ld-flex-row-inner thaw-container">
                
                <div class="ld-flex-col-10">
                    <label for=""># ICSI</label>
                    <input type="text" name="" id="">
                </div>
                
            </div>
        </div>
        <div class="ld-flex-col-0-5 td-form-3">
            <div class="ld-flex-row-inner thaw-container">
                
                <div class="ld-flex-col-10">
                    <label for=""># 2PN</label>
                    <input type="text" name="" id="">
                </div>
                
            </div>
        </div>    
    </div>


    <div class="ld-flex-row table-container table-3">

        <!-- 4th row  -->
        <div class="ld-flex-col-2 td-form-4">
            <div class="ld-flex-row-inner  bx-cryo-details-con">
                
                <div  class="ld-flex-col-10">
                    <input type="checkbox" name="" id="">
                    <label for="">Bx All</label>
                </div>
                <div  class="ld-flex-col-10">
                    <input type="checkbox" name="" id="">
                    <label for="">Bx up to </label>
                    <p>[<input type="text" name="" id="">] & Cryo remaining embryos w/o biopsy – <input type="checkbox" name="" id=""> Yes / <input type="checkbox" name="" id=""> No <span>(circle one)</span></p>
                </div>
                
            </div>
        </div>

        <div class="ld-flex-col-1-7-5 td-form-4"> 
            <div class="ld-flex-row-inner psg-pgd-lab-con">
                <div  class="ld-flex-col-10">
                    <p>PGS / PGD</p>
                </div>
                <div class="ld-flex-col-10">
                    <label for="">PGD Lab:</label>
                    <input type="text" name="" id="" placeholder="Enter PGD lab">
                </div>
                <div class="ld-flex-col-10">
                    <label for="">Test:</label>
                    <input type="text" name="" id="" placeholder="Enter test">
                </div>
                <div class="ld-flex-col-5">
                    <label for="">Bx Emb:</label>
                    <input type="text" name="" id="" placeholder="Enter Bx Emb">
                </div>
                <div class="ld-flex-col-5">
                    <label for="">Obs:</label>
                    <input type="text" name="" id="" placeholder="Enter Ods">
                </div>
                <div class="ld-flex-col-5">
                    <label for="">Day 5 Bx:</label>
                    <input type="text" name="" id="" placeholder="Enter day 5 bx">
                </div>
                <div class="ld-flex-col-5">
                    <label for="">Day 6 Bx:</label>
                    <input type="text" name="" id="" placeholder="Enter day 6 bx">
                </div>
                <div class="ld-flex-col-5">
                    <label for="">Day 7 Bx:</label>
                    <input type="text" name="" id="" placeholder="Enter day 7 bx">
                </div>
                <div class="ld-flex-col-5">
                    <label for="">Total Bx:</label>
                    <input type="text" name="" id="" placeholder="Enter total bx">
                </div>
            </div>
            
        </div>

        <div class="ld-flex-col-1-7-5 td-form-4"> 
            <div class="ld-flex-row-inner sperm-prep-con">
                <div  class="ld-flex-col-10">
                    <p>SPERM PREP</p>
                </div>
                <div class="ld-flex-col-10">
                    <input type="checkbox" name="" id="">
                    <label for="">Wash</label>
                </div>
                
                <div class="ld-flex-col-10">
                    <input type="checkbox" name="" id="">
                    <label for="">Swim up</label>
                </div>
                
                <div class="ld-flex-col-10">
                    <input type="checkbox" name="" id="">
                    <label for="">Gradient</label>
                </div>
                <div class="ld-flex-col-10">
                    <input type="checkbox" name="" id="">
                    <label for="">TESE prep</label>
                </div>
                <div class="ld-flex-col-5">
                    <label for="">By:</label>
                    <input type="text" name="" id="">
                </div>
                <div class="ld-flex-col-5">
                    <label for="">Time:</label>
                    <input type="date" name="" id="">
                </div>
            </div>
            
        </div>

        <div class="ld-flex-col-4-5 td-form-4"> 
            <div class="ld-flex-row-inner sperm-calc-main-con">
                <div  class="ld-flex-col-2-5">
                    <p>Volume:</p>
                    <p>Count:</p>
                    <p>Motility:</p>
                    <p>Progressive:</p>
                </div>
                <div  class="ld-flex-col-2-5">
                    <div class="ld-flex-row-inner sperm-calc">
                        <div  class="ld-flex-col-10">
                           <p>Fresh Semen or Before Freezing</p>
                        </div>
                        <div  class="ld-flex-col-10">
                            <input type="text" name="" id="">
                            <label for="">ml</label>
                        </div>
                        <div  class="ld-flex-col-10">
                            <input type="text" name="" id="">
                            <label for="">x 10^6/ml</label>
                        </div>
                        <div  class="ld-flex-col-10">
                            <input type="text" name="" id="">
                            <label for="">%</label>
                        </div>
                        <div  class="ld-flex-col-3-3">
                            <input type="checkbox" name="" id="">
                            <label for="">PR</label>
                        </div>
                        <div  class="ld-flex-col-3-3">
                            <input type="checkbox" name="" id="">
                            <label for="">NP</label>
                        </div>
                        <div  class="ld-flex-col-3-3">
                            <input type="checkbox" name="" id="">
                            <label for="">IM</label>
                        </div>
                    </div>
                </div>
                <div  class="ld-flex-col-2-5">
                    <div class="ld-flex-row-inner sperm-calc">
                        <div  class="ld-flex-col-10">
                           <p>After Thawing</p>
                        </div>
                        <div  class="ld-flex-col-10">
                            <input type="text" name="" id="">
                            <label for="">ml</label>
                        </div>
                        <div  class="ld-flex-col-10">
                            <input type="text" name="" id="">
                            <label for="">x 10^6/ml</label>
                        </div>
                        <div  class="ld-flex-col-10">
                            <input type="text" name="" id="">
                            <label for="">%</label>
                        </div>
                        <div  class="ld-flex-col-3-3">
                            <input type="checkbox" name="" id="">
                            <label for="">PR</label>
                        </div>
                        <div  class="ld-flex-col-3-3">
                            <input type="checkbox" name="" id="">
                            <label for="">NP</label>
                        </div>
                        <div  class="ld-flex-col-3-3">
                            <input type="checkbox" name="" id="">
                            <label for="">IM</label>
                        </div>
                    </div>
                </div>
                <div  class="ld-flex-col-2-5">
                    <div class="ld-flex-row-inner sperm-calc">
                        <div  class="ld-flex-col-10">
                           <p>FINAL</p>
                        </div>
                        <div  class="ld-flex-col-10">
                            <input type="text" name="" id="">
                            <label for="">ml</label>
                        </div>
                        <div  class="ld-flex-col-10">
                            <input type="text" name="" id="">
                            <label for="">x 10^6/ml</label>
                        </div>
                        <div  class="ld-flex-col-10">
                            <input type="text" name="" id="">
                            <label for="">%</label>
                        </div>
                        <div  class="ld-flex-col-3-3">
                            <input type="checkbox" name="" id="">
                            <label for="">PR</label>
                        </div>
                        <div  class="ld-flex-col-3-3">
                            <input type="checkbox" name="" id="">
                            <label for="">NP</label>
                        </div>
                        <div  class="ld-flex-col-3-3">
                            <input type="checkbox" name="" id="">
                            <label for="">IM</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
    </div>


    <div class="ld-flex-row table-container table-4">
        <div class="ld-flex-col-4 td-form-5"> 
            <div class="ld-flex-row-inner cryopreservation-main-con">
                <div  class="ld-flex-col-10">
                    <p>Cryopreservation</p>
                </div>
                <div  class="ld-flex-col-10">
                    <div class="ld-flex-row-inner cryopreservation-sub-con">
                        <div  class="ld-flex-col-5">
                            <p>Cryopreservation Consent Date</p>
                        </div>
                        <div  class="ld-flex-col-2-5 accept-decline">
                            <input type="checkbox" name="" id="">
                            <label for="">Accept</label>
                        </div>
                        <div  class="ld-flex-col-2-5 accept-decline">
                            <input type="checkbox" name="" id="">
                            <label for="">Decline</label>
                        </div>
                    </div>
                </div>
                <div  class="ld-flex-col-10">
                    <div class="ld-flex-row-inner cryopreservation-sub-con">
                        <div  class="ld-flex-col-1-4-2">
                         <p>Cryo Stage</p>
                        </div>
                        <div  class="ld-flex-col-1-4-2">
                            <label for="">2PN:</label>
                            <input type="text" name="" id="">
                        </div>
                        <div  class="ld-flex-col-1-4-2">
                            <label for="">D3:</label>
                            <input type="text" name="" id="">
                        </div>
                        <div  class="ld-flex-col-1-4-2">
                            <label for="">D5:</label>
                            <input type="text" name="" id="">
                        </div>
                        <div  class="ld-flex-col-1-4-2">
                            <label for="">D6:</label>
                            <input type="text" name="" id="">
                        </div>
                        <div  class="ld-flex-col-1-4-2">
                            <label for="">D7:</label>
                            <input type="text" name="" id="">
                        </div>
                        <div  class="ld-flex-col-1-4-2">
                            <label for="">Total</label>
                            <input type="text" name="" id="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ld-flex-col-2-5 td-form-5"> 
            <div class="ld-flex-row-inner et-day-main-con">
                <div  class="ld-flex-col-10">
                    <div class="ld-flex-row-inner et-day-sub-con">
                        <div  class="ld-flex-col-2-5">
                            <p>ET Day:</p>
                        </div>
                        <div  class="ld-flex-col-2-5">
                            <input type="checkbox" name="" id="">
                            <label for="">D3</label>
                        </div>
                        <div  class="ld-flex-col-2-5">
                            <input type="checkbox" name="" id="">
                            <label for="">D5</label>
                        </div>
                        <div  class="ld-flex-col-2-5">
                            <input type="checkbox" name="" id="">
                            <label for="">D6</label>
                        </div>
                    </div>
                </div>
                <div  class="ld-flex-col-10">
                    <div class="ld-flex-row-inner et-day-sub-con">
                        
                        <div  class="ld-flex-col-5">
                            <label for=""># ET:</label>
                            <input type="text" name="" id="">
                        </div>
                        <div  class="ld-flex-col-5">
                            <label for="">ET Day</label>
                            <input type="text" name="" id="">
                        </div>
                    </div>
                </div>
                <div  class="ld-flex-col-10">
                    <div class="ld-flex-row-inner  et-day-sub-con">
                        <div  class="ld-flex-col-10">
                            <label for="">Catheter:</label>
                            <input type="text" name="" id="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ld-flex-col-1-5 td-form-5"> 
            <div class="ld-flex-row-inner">
                <div  class="ld-flex-col-10">
                    <p>Embryo Retaining</p>
                </div>
                <div class="ld-flex-col-5">
                    <input type="checkbox" name="" id="">
                    <label for="">Yes</label>
                </div>
                
                <div class="ld-flex-col-5">
                    <input type="checkbox" name="" id="">
                    <label for="">No</label>
                </div>
            </div>
        </div>

        <div class="ld-flex-col-2 td-form-5"> 
            <div class="ld-flex-row-inner">
                <div  class="ld-flex-col-10">
                    <p>Embryo Transfer ID Check</p>
                </div>
                <div class="ld-flex-col-5">
                    <label for="">Date:</label>
                    <input type="date" name="" id="">
                </div>
                
                <div class="ld-flex-col-5">
                    <label for="">Time</label>
                    <input type="time" name="" id="">
                </div>

                <div class="ld-flex-col-5">
                    <label for="">Emb:</label>
                    <input type="text" name="" id="">
                </div>

                <div class="ld-flex-col-5">
                    <label for="">Obs:</label>
                    <input type="text" name="" id="">
                </div>
            </div>
        </div>

        
    </div>

</div> 





<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
<script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <!-- latest jquery-->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/config.js">   </script>
    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="assets/js/chart/chartist/chartist.js"></script>
    <script src="assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="assets/js/chart/morris-chart/raphael.js"></script>
    <script src="assets/js/chart/morris-chart/morris.js"> </script>
    <script src="assets/js/chart/morris-chart/prettify.min.js"></script>
    <script src="assets/js/chart/knob/knob.min.js"></script>
    <script src="assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="assets/js/prism/prism.min.js"></script>
    <script src="assets/js/clipboard/clipboard.min.js"></script>
    <script src="assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="assets/js/counter/jquery.counterup.min.js"></script>
    <script src="assets/js/counter/counter-custom.js"></script>
    <script src="assets/js/custom-card/custom-card.js"></script>
    <script src="assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="assets/js/dashboard/dashboard_2.js"></script>
    <script src="assets/js/slick-slider/slick.min.js"></script>
    <script src="assets/js/slick-slider/slick-theme.js"></script>
	<script src="assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="assets/js/datepicker/date-picker/datepicker.custom.js"></script>
	<script src="assets/js/tooltip-init.js"></script>
	<script src="assets/js/dragscroll.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <!--<script src="assets/js/theme-customizer/customizer.js"></script>-->
    <script src="assets/js/script.js"></script>
    <!-- login js-->
</body>
</html>