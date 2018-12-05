@extends('layout')

@section('title', 'Devbox Systems Corp')

@section('home')
@stop

@section('services')
@stop

@section('about')
    <!-- ABOUT US -->
    <div class="about_us">
        <div class="section_about">
        <div class="container">
            <div class="offset-1 col-10">
                <div class="section_header">About DevBlox</div>
            <br>
                DEVBOX TECHNOLOGIES CORPORATION is an IT company that specializes in designing, developing and implementing websites, as well as software and mobile applications.
                This corporation was established on November 2018, as a team of seven proficient students with the course of Bachelor of Science in Information Technology who are focused and experienced in web designing, web development, quality assurance and information technology. 
                DEVBLOX TECHNOLOGIES CORP’s fundamental forte is about its desire to create an innovative future with its products that will make the humankind’s life easier and drawback-free. It is also known for its professionalism in terms of meeting their projects’ deadlines with absolute and complete project presentation that will uphold the company’s products as world-class and complete package creations but in a budget friendly agreement.
                DEVBLOX TECHNOLOGIES CORP. is distinguished as a globally competitive company that provides absolute and intact resolution to the toughest difficulties and adversities nowadays. The company has proven itself to be an unyielding, concrete and a trustworthy associate to its clients to deliver the best customer satisfaction, superior service and competent <employees class=""></employees>
            </div>
            
        </div>
        </div>

    </div>
@stop

@section('contact')
    <div class="contact_container"> 
            
            <div class="contact_content">
                <div class="contact_header">
                    SEND US A MESSAGE               
                </div>

                <div class="container-fluid contact_form_container">
                                      
                        <div class="row justify-content-center">
                        <!-- CONTACT INFO -->
    <div class="contact_form_sub_container col-9 col-sm-7 col-md-4 col-lg-3">
        <table class="contact_table">
            <tr>
                <td><img class="contact_icon_mail" src="/images/icon_contact_mail.png"></td>
                <td>info@devblox.co</td>
            </tr>
            <tr>
                <td><img class="contact_icon_location" src="/images/icon_contact_location.png"></td>
                <td>512 Summerspell Bldg. Ortigas Center, Pasig</td>
            </tr>
            <tr>
                <td><img class="contact_icon_telephone" src="/images/icon_contact_telephone.png"></td>
                <td>1-455-512-6556</td>
            </tr>
        </table>
    </div>
                            
    <div class="contact_form_sub_container col-9 col-sm-7 col-md-5 col-lg-4">
            
            {!! Form::open(['route' => 'contact.store']) !!}

            <div class="form-group">
                {!! Form::text('name', null, ['class' => 'form-control form-control-sm curved_form', 'placeholder' => 'Name']) !!}
            </div>

            <div class="form-group">
                {!! Form::text('email', null, ['class' => 'form-control form-control-sm curved_form', 'placeholder' => 'Email Address']) !!}
            </div>

            <div class="form-group">
                {!! Form::select('subject',array('CW'=>'Complete Website','WD'=>'Web Designing','S'=>'Security','O'=>'Others','I'=>'---- Inquiry ----'),'I',['class' => 'form-control form-control-sm curved_form']) !!}
            </div>

            <div class="form-group">
                {!! Form::textarea('msg', null, ['class' => 'form-control form-control-sm curved_area', 'placeholder' => 'Message','rows' => '3']) !!}
            </div>

            {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}

            {!! Form::close() !!}
    </div>
                    </div>  
                </div>
            </div>
    </div>
@stop