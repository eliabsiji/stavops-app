@extends('layouts.master')
@section('content')
          
   <!--begin::Main-->
   <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
                                
<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 " 

>

<!--begin::Toolbar container-->
<div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">



<!--begin::Page title-->
<div  class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
<!--begin::Title-->
<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
Account Settings
</h1>
<!--end::Title-->


<!--begin::Breadcrumb-->
<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                                        <a href="../index.html" class="text-muted text-hover-primary">
                    Home                            </a>
                                </li>
                    <!--end::Item-->
                        <!--begin::Item-->
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>
        <!--end::Item-->
                            
                <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                                        Account                                            </li>
                    <!--end::Item-->
                            
        </ul>
<!--end::Breadcrumb-->
</div>
<!--end::Page title-->
<!--begin::Actions-->
<div class="d-flex align-items-center gap-2 gap-lg-3">
<!--begin::Filter menu-->
<div class="m-0">
<!--begin::Menu toggle-->
<a href="#" class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
    <i class="ki-duotone ki-filter fs-6 text-muted me-1"><span class="path1"></span><span class="path2"></span></i>               
    Filter
</a>
<!--end::Menu toggle-->



<!--begin::Menu 1-->
<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_648698383d519">
<!--begin::Header-->
<div class="px-7 py-5">
<div class="fs-5 text-dark fw-bold">Filter Options</div>
</div>
<!--end::Header-->

<!--begin::Menu separator-->
<div class="separator border-gray-200"></div>
<!--end::Menu separator-->

<!--begin::Form-->
<div class="px-7 py-5">
<!--begin::Input group-->
<div class="mb-10">
<!--begin::Label-->
<label class="form-label fw-semibold">Status:</label>
<!--end::Label-->

<!--begin::Input-->
<div>
    <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_648698383d519" data-allow-clear="true">
        <option></option>
        <option value="1">Approved</option>
        <option value="2">Pending</option>
        <option value="2">In Process</option>
        <option value="2">Rejected</option>
    </select>
</div>
<!--end::Input-->
</div>
<!--end::Input group-->

<!--begin::Input group-->
<div class="mb-10">
<!--begin::Label-->
<label class="form-label fw-semibold">Member Type:</label>
<!--end::Label-->

<!--begin::Options-->
<div class="d-flex">
    <!--begin::Options-->    
    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
        <input class="form-check-input" type="checkbox" value="1"/>
        <span class="form-check-label">
            Author
        </span>
    </label>
    <!--end::Options-->    

    <!--begin::Options-->    
    <label class="form-check form-check-sm form-check-custom form-check-solid">
        <input class="form-check-input" type="checkbox" value="2" checked="checked"/>
        <span class="form-check-label">
            Customer
        </span>
    </label>
    <!--end::Options-->    
</div>        
<!--end::Options-->    
</div>
<!--end::Input group-->

<!--begin::Input group-->
<div class="mb-10">
<!--begin::Label-->
<label class="form-label fw-semibold">Notifications:</label>
<!--end::Label-->

<!--begin::Switch-->
<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
    <input class="form-check-input" type="checkbox" value="" name="notifications" checked />
    <label class="form-check-label">
        Enabled
    </label>
</div>
<!--end::Switch-->
</div>
<!--end::Input group-->

<!--begin::Actions-->
<div class="d-flex justify-content-end">
<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>

<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
</div>
<!--end::Actions-->
</div>
<!--end::Form-->
</div>
<!--end::Menu 1-->        </div>
<!--end::Filter menu-->


<!--begin::Secondary button-->
<!--end::Secondary button-->

<!--begin::Primary button-->
<a href="#" class="btn btn-sm fw-bold btn-primary"  data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">
Create        </a>
<!--end::Primary button-->
</div>
<!--end::Actions-->
</div>
<!--end::Toolbar container-->
</div>
<!--end::Toolbar-->                                        
        
<!--begin::Content-->
<div id="kt_app_content" class="app-content  flex-column-fluid " >


<!--begin::Content container-->
<div id="kt_app_content_container" class="app-container  container-xxl ">

<!--begin::Navbar-->
<div class="card mb-5 mb-xl-10">
<div class="card-body pt-9 pb-0">
   


<!--begin::Basic info-->
<div class="card mb-5 mb-xl-10">
<!--begin::Card header-->
<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
<!--begin::Card title-->
<div class="card-title m-0">
<h3 class="fw-bold m-0">PART A (To be completed by staff)</h3>
</div>
<!--end::Card title-->
</div>
<!--begin::Card header-->

<!--begin::Content-->
<div id="kt_account_settings_profile_details" class="collapse show">
<!--begin::Form-->
<form id="kt_account_profile_details_form" class="form">
<!--begin::Card body-->
<div class="card-body border-top p-9">
   
<!--begin::Input group-->
<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Period of Report</label>
    <!--end::Label-->

    <!--begin::Col-->
    <div class="col-lg-8">
        <!--begin::Row-->
        <div class="row">
            <!--begin::Col-->
            <div class="col-lg-6 fv-row">
                From:<input type="date" name="fromdate" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                 placeholder="From" required/>
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-lg-6 fv-row">
               To: <input type="date" name="todate" class="form-control form-control-lg form-control-solid" 
               placeholder="To" required/>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Col-->
</div>
<!--end::Input group-->
    

    <!--begin::Input group-->
    <div class="row mb-6">
        <!--begin::Label-->
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">First Name</label>
        <!--end::Label-->

        <!--begin::Col-->
        <div class="col-lg-8 fv-row">
            <input type="text" name="fname" class="form-control form-control-lg form-control-solid" placeholder="First Name name" required/>
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->
     <!--begin::Input group-->
     <div class="row mb-6">
        <!--begin::Label-->
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Middle Name</label>
        <!--end::Label-->

        <!--begin::Col-->
        <div class="col-lg-8 fv-row">
            <input type="text" name="mname" class="form-control form-control-lg form-control-solid" placeholder="Middle Name" required />
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->
     <!--begin::Input group-->
     <div class="row mb-6">
        <!--begin::Label-->
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Last Name</label>
        <!--end::Label-->

        <!--begin::Col-->
        <div class="col-lg-8 fv-row">
            <input type="text" name="lname" class="form-control form-control-lg form-control-solid" placeholder="Last Name" required/>
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="row mb-6">
        <!--begin::Label-->
        <label class="col-lg-4 col-form-label fw-semibold fs-6">
            <span class="required">Contact Phone</span>

            
<span class="ms-1"  data-bs-toggle="tooltip" title="Phone number must be active" >
<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>                    </label>
        <!--end::Label-->
        
        <!--begin::Col-->
        <div class="col-lg-8 fv-row">
            <input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" required />
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->



    <!--begin::Input group-->
    <div class="row mb-6">
        <!--begin::Label-->
        <label class="col-lg-4 col-form-label fw-semibold fs-6">Date of birth</label>
        <!--end::Label-->

        <!--begin::Col-->
        <div class="col-lg-8 fv-row">
            <input type="date" name="dob" class="form-control form-control-lg form-control-solid" placeholder="Date of Birth" required />
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->



    <!--begin::Input group-->
    <div class="row mb-6">
        <!--begin::Label-->
        <label class="col-lg-4 col-form-label fw-semibold fs-6">
            <span class="required">Nationality</span>

            
<span class="ms-1"  data-bs-toggle="tooltip" title="Country of origination" >
<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>                    </label>
        <!--end::Label-->

        <!--begin::Col-->
        <div class="col-lg-8 fv-row">
            <select name="nationality" aria-label="Select a Country" data-control="select2" data-placeholder="Select a country..." class="form-select form-select-solid form-select-lg fw-semibold">
                <option value="">Select a Country...</option>
                                                <option data-kt-flag="flags/afghanistan.svg" value="AF">Afghanistan</option>
                                                <option data-kt-flag="flags/aland-islands.svg" value="AX">Aland Islands</option>
                                                <option data-kt-flag="flags/albania.svg" value="AL">Albania</option>
                                                <option data-kt-flag="flags/algeria.svg" value="DZ">Algeria</option>
                                                <option data-kt-flag="flags/american-samoa.svg" value="AS">American Samoa</option>
                                                <option data-kt-flag="flags/andorra.svg" value="AD">Andorra</option>
                                                <option data-kt-flag="flags/angola.svg" value="AO">Angola</option>
                                                <option data-kt-flag="flags/anguilla.svg" value="AI">Anguilla</option>
                                                <option data-kt-flag="flags/antigua-and-barbuda.svg" value="AG">Antigua and Barbuda</option>
                                                <option data-kt-flag="flags/argentina.svg" value="AR">Argentina</option>
                                                <option data-kt-flag="flags/armenia.svg" value="AM">Armenia</option>
                                                <option data-kt-flag="flags/aruba.svg" value="AW">Aruba</option>
                                                <option data-kt-flag="flags/australia.svg" value="AU">Australia</option>
                                                <option data-kt-flag="flags/austria.svg" value="AT">Austria</option>
                                                <option data-kt-flag="flags/azerbaijan.svg" value="AZ">Azerbaijan</option>
                                                <option data-kt-flag="flags/bahamas.svg" value="BS">Bahamas</option>
                                                <option data-kt-flag="flags/bahrain.svg" value="BH">Bahrain</option>
                                                <option data-kt-flag="flags/bangladesh.svg" value="BD">Bangladesh</option>
                                                <option data-kt-flag="flags/barbados.svg" value="BB">Barbados</option>
                                                <option data-kt-flag="flags/belarus.svg" value="BY">Belarus</option>
                                                <option data-kt-flag="flags/belgium.svg" value="BE">Belgium</option>
                                                <option data-kt-flag="flags/belize.svg" value="BZ">Belize</option>
                                                <option data-kt-flag="flags/benin.svg" value="BJ">Benin</option>
                                                <option data-kt-flag="flags/bermuda.svg" value="BM">Bermuda</option>
                                                <option data-kt-flag="flags/bhutan.svg" value="BT">Bhutan</option>
                                                <option data-kt-flag="flags/bolivia.svg" value="BO">Bolivia, Plurinational State of</option>
                                                <option data-kt-flag="flags/bonaire.svg" value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                <option data-kt-flag="flags/bosnia-and-herzegovina.svg" value="BA">Bosnia and Herzegovina</option>
                                                <option data-kt-flag="flags/botswana.svg" value="BW">Botswana</option>
                                                <option data-kt-flag="flags/brazil.svg" value="BR">Brazil</option>
                                                <option data-kt-flag="flags/british-indian-ocean-territory.svg" value="IO">British Indian Ocean Territory</option>
                                                <option data-kt-flag="flags/brunei.svg" value="BN">Brunei Darussalam</option>
                                                <option data-kt-flag="flags/bulgaria.svg" value="BG">Bulgaria</option>
                                                <option data-kt-flag="flags/burkina-faso.svg" value="BF">Burkina Faso</option>
                                                <option data-kt-flag="flags/burundi.svg" value="BI">Burundi</option>
                                                <option data-kt-flag="flags/cambodia.svg" value="KH">Cambodia</option>
                                                <option data-kt-flag="flags/cameroon.svg" value="CM">Cameroon</option>
                                                <option data-kt-flag="flags/canada.svg" value="CA">Canada</option>
                                                <option data-kt-flag="flags/cape-verde.svg" value="CV">Cape Verde</option>
                                                <option data-kt-flag="flags/cayman-islands.svg" value="KY">Cayman Islands</option>
                                                <option data-kt-flag="flags/central-african-republic.svg" value="CF">Central African Republic</option>
                                                <option data-kt-flag="flags/chad.svg" value="TD">Chad</option>
                                                <option data-kt-flag="flags/chile.svg" value="CL">Chile</option>
                                                <option data-kt-flag="flags/china.svg" value="CN">China</option>
                                                <option data-kt-flag="flags/christmas-island.svg" value="CX">Christmas Island</option>
                                                <option data-kt-flag="flags/cocos-island.svg" value="CC">Cocos (Keeling) Islands</option>
                                                <option data-kt-flag="flags/colombia.svg" value="CO">Colombia</option>
                                                <option data-kt-flag="flags/comoros.svg" value="KM">Comoros</option>
                                                <option data-kt-flag="flags/cook-islands.svg" value="CK">Cook Islands</option>
                                                <option data-kt-flag="flags/costa-rica.svg" value="CR">Costa Rica</option>
                                                <option data-kt-flag="flags/ivory-coast.svg" value="CI">Côte d'Ivoire</option>
                                                <option data-kt-flag="flags/croatia.svg" value="HR">Croatia</option>
                                                <option data-kt-flag="flags/cuba.svg" value="CU">Cuba</option>
                                                <option data-kt-flag="flags/curacao.svg" value="CW">Curaçao</option>
                                                <option data-kt-flag="flags/czech-republic.svg" value="CZ">Czech Republic</option>
                                                <option data-kt-flag="flags/denmark.svg" value="DK">Denmark</option>
                                                <option data-kt-flag="flags/djibouti.svg" value="DJ">Djibouti</option>
                                                <option data-kt-flag="flags/dominica.svg" value="DM">Dominica</option>
                                                <option data-kt-flag="flags/dominican-republic.svg" value="DO">Dominican Republic</option>
                                                <option data-kt-flag="flags/ecuador.svg" value="EC">Ecuador</option>
                                                <option data-kt-flag="flags/egypt.svg" value="EG">Egypt</option>
                                                <option data-kt-flag="flags/el-salvador.svg" value="SV">El Salvador</option>
                                                <option data-kt-flag="flags/equatorial-guinea.svg" value="GQ">Equatorial Guinea</option>
                                                <option data-kt-flag="flags/eritrea.svg" value="ER">Eritrea</option>
                                                <option data-kt-flag="flags/estonia.svg" value="EE">Estonia</option>
                                                <option data-kt-flag="flags/ethiopia.svg" value="ET">Ethiopia</option>
                                                <option data-kt-flag="flags/falkland-islands.svg" value="FK">Falkland Islands (Malvinas)</option>
                                                <option data-kt-flag="flags/fiji.svg" value="FJ">Fiji</option>
                                                <option data-kt-flag="flags/finland.svg" value="FI">Finland</option>
                                                <option data-kt-flag="flags/france.svg" value="FR">France</option>
                                                <option data-kt-flag="flags/french-polynesia.svg" value="PF">French Polynesia</option>
                                                <option data-kt-flag="flags/gabon.svg" value="GA">Gabon</option>
                                                <option data-kt-flag="flags/gambia.svg" value="GM">Gambia</option>
                                                <option data-kt-flag="flags/georgia.svg" value="GE">Georgia</option>
                                                <option data-kt-flag="flags/germany.svg" value="DE">Germany</option>
                                                <option data-kt-flag="flags/ghana.svg" value="GH">Ghana</option>
                                                <option data-kt-flag="flags/gibraltar.svg" value="GI">Gibraltar</option>
                                                <option data-kt-flag="flags/greece.svg" value="GR">Greece</option>
                                                <option data-kt-flag="flags/greenland.svg" value="GL">Greenland</option>
                                                <option data-kt-flag="flags/grenada.svg" value="GD">Grenada</option>
                                                <option data-kt-flag="flags/guam.svg" value="GU">Guam</option>
                                                <option data-kt-flag="flags/guatemala.svg" value="GT">Guatemala</option>
                                                <option data-kt-flag="flags/guernsey.svg" value="GG">Guernsey</option>
                                                <option data-kt-flag="flags/guinea.svg" value="GN">Guinea</option>
                                                <option data-kt-flag="flags/guinea-bissau.svg" value="GW">Guinea-Bissau</option>
                                                <option data-kt-flag="flags/haiti.svg" value="HT">Haiti</option>
                                                <option data-kt-flag="flags/vatican-city.svg" value="VA">Holy See (Vatican City State)</option>
                                                <option data-kt-flag="flags/honduras.svg" value="HN">Honduras</option>
                                                <option data-kt-flag="flags/hong-kong.svg" value="HK">Hong Kong</option>
                                                <option data-kt-flag="flags/hungary.svg" value="HU">Hungary</option>
                                                <option data-kt-flag="flags/iceland.svg" value="IS">Iceland</option>
                                                <option data-kt-flag="flags/india.svg" value="IN">India</option>
                                                <option data-kt-flag="flags/indonesia.svg" value="ID">Indonesia</option>
                                                <option data-kt-flag="flags/iran.svg" value="IR">Iran, Islamic Republic of</option>
                                                <option data-kt-flag="flags/iraq.svg" value="IQ">Iraq</option>
                                                <option data-kt-flag="flags/ireland.svg" value="IE">Ireland</option>
                                                <option data-kt-flag="flags/isle-of-man.svg" value="IM">Isle of Man</option>
                                                <option data-kt-flag="flags/israel.svg" value="IL">Israel</option>
                                                <option data-kt-flag="flags/italy.svg" value="IT">Italy</option>
                                                <option data-kt-flag="flags/jamaica.svg" value="JM">Jamaica</option>
                                                <option data-kt-flag="flags/japan.svg" value="JP">Japan</option>
                                                <option data-kt-flag="flags/jersey.svg" value="JE">Jersey</option>
                                                <option data-kt-flag="flags/jordan.svg" value="JO">Jordan</option>
                                                <option data-kt-flag="flags/kazakhstan.svg" value="KZ">Kazakhstan</option>
                                                <option data-kt-flag="flags/kenya.svg" value="KE">Kenya</option>
                                                <option data-kt-flag="flags/kiribati.svg" value="KI">Kiribati</option>
                                                <option data-kt-flag="flags/north-korea.svg" value="KP">Korea, Democratic People's Republic of</option>
                                                <option data-kt-flag="flags/kuwait.svg" value="KW">Kuwait</option>
                                                <option data-kt-flag="flags/kyrgyzstan.svg" value="KG">Kyrgyzstan</option>
                                                <option data-kt-flag="flags/laos.svg" value="LA">Lao People's Democratic Republic</option>
                                                <option data-kt-flag="flags/latvia.svg" value="LV">Latvia</option>
                                                <option data-kt-flag="flags/lebanon.svg" value="LB">Lebanon</option>
                                                <option data-kt-flag="flags/lesotho.svg" value="LS">Lesotho</option>
                                                <option data-kt-flag="flags/liberia.svg" value="LR">Liberia</option>
                                                <option data-kt-flag="flags/libya.svg" value="LY">Libya</option>
                                                <option data-kt-flag="flags/liechtenstein.svg" value="LI">Liechtenstein</option>
                                                <option data-kt-flag="flags/lithuania.svg" value="LT">Lithuania</option>
                                                <option data-kt-flag="flags/luxembourg.svg" value="LU">Luxembourg</option>
                                                <option data-kt-flag="flags/macao.svg" value="MO">Macao</option>
                                                <option data-kt-flag="flags/madagascar.svg" value="MG">Madagascar</option>
                                                <option data-kt-flag="flags/malawi.svg" value="MW">Malawi</option>
                                                <option data-kt-flag="flags/malaysia.svg" value="MY">Malaysia</option>
                                                <option data-kt-flag="flags/maldives.svg" value="MV">Maldives</option>
                                                <option data-kt-flag="flags/mali.svg" value="ML">Mali</option>
                                                <option data-kt-flag="flags/malta.svg" value="MT">Malta</option>
                                                <option data-kt-flag="flags/marshall-island.svg" value="MH">Marshall Islands</option>
                                                <option data-kt-flag="flags/martinique.svg" value="MQ">Martinique</option>
                                                <option data-kt-flag="flags/mauritania.svg" value="MR">Mauritania</option>
                                                <option data-kt-flag="flags/mauritius.svg" value="MU">Mauritius</option>
                                                <option data-kt-flag="flags/mexico.svg" value="MX">Mexico</option>
                                                <option data-kt-flag="flags/micronesia.svg" value="FM">Micronesia, Federated States of</option>
                                                <option data-kt-flag="flags/moldova.svg" value="MD">Moldova, Republic of</option>
                                                <option data-kt-flag="flags/monaco.svg" value="MC">Monaco</option>
                                                <option data-kt-flag="flags/mongolia.svg" value="MN">Mongolia</option>
                                                <option data-kt-flag="flags/montenegro.svg" value="ME">Montenegro</option>
                                                <option data-kt-flag="flags/montserrat.svg" value="MS">Montserrat</option>
                                                <option data-kt-flag="flags/morocco.svg" value="MA">Morocco</option>
                                                <option data-kt-flag="flags/mozambique.svg" value="MZ">Mozambique</option>
                                                <option data-kt-flag="flags/myanmar.svg" value="MM">Myanmar</option>
                                                <option data-kt-flag="flags/namibia.svg" value="NA">Namibia</option>
                                                <option data-kt-flag="flags/nauru.svg" value="NR">Nauru</option>
                                                <option data-kt-flag="flags/nepal.svg" value="NP">Nepal</option>
                                                <option data-kt-flag="flags/netherlands.svg" value="NL">Netherlands</option>
                                                <option data-kt-flag="flags/new-zealand.svg" value="NZ">New Zealand</option>
                                                <option data-kt-flag="flags/nicaragua.svg" value="NI">Nicaragua</option>
                                                <option data-kt-flag="flags/niger.svg" value="NE">Niger</option>
                                                <option data-kt-flag="flags/nigeria.svg" value="NG">Nigeria</option>
                                                <option data-kt-flag="flags/niue.svg" value="NU">Niue</option>
                                                <option data-kt-flag="flags/norfolk-island.svg" value="NF">Norfolk Island</option>
                                                <option data-kt-flag="flags/northern-mariana-islands.svg" value="MP">Northern Mariana Islands</option>
                                                <option data-kt-flag="flags/norway.svg" value="NO">Norway</option>
                                                <option data-kt-flag="flags/oman.svg" value="OM">Oman</option>
                                                <option data-kt-flag="flags/pakistan.svg" value="PK">Pakistan</option>
                                                <option data-kt-flag="flags/palau.svg" value="PW">Palau</option>
                                                <option data-kt-flag="flags/palestine.svg" value="PS">Palestinian Territory, Occupied</option>
                                                <option data-kt-flag="flags/panama.svg" value="PA">Panama</option>
                                                <option data-kt-flag="flags/papua-new-guinea.svg" value="PG">Papua New Guinea</option>
                                                <option data-kt-flag="flags/paraguay.svg" value="PY">Paraguay</option>
                                                <option data-kt-flag="flags/peru.svg" value="PE">Peru</option>
                                                <option data-kt-flag="flags/philippines.svg" value="PH">Philippines</option>
                                                <option data-kt-flag="flags/poland.svg" value="PL">Poland</option>
                                                <option data-kt-flag="flags/portugal.svg" value="PT">Portugal</option>
                                                <option data-kt-flag="flags/puerto-rico.svg" value="PR">Puerto Rico</option>
                                                <option data-kt-flag="flags/qatar.svg" value="QA">Qatar</option>
                                                <option data-kt-flag="flags/romania.svg" value="RO">Romania</option>
                                                <option data-kt-flag="flags/russia.svg" value="RU">Russian Federation</option>
                                                <option data-kt-flag="flags/rwanda.svg" value="RW">Rwanda</option>
                                                <option data-kt-flag="flags/st-barts.svg" value="BL">Saint Barthélemy</option>
                                                <option data-kt-flag="flags/saint-kitts-and-nevis.svg" value="KN">Saint Kitts and Nevis</option>
                                                <option data-kt-flag="flags/st-lucia.svg" value="LC">Saint Lucia</option>
                                                <option data-kt-flag="flags/sint-maarten.svg" value="MF">Saint Martin (French part)</option>
                                                <option data-kt-flag="flags/st-vincent-and-the-grenadines.svg" value="VC">Saint Vincent and the Grenadines</option>
                                                <option data-kt-flag="flags/samoa.svg" value="WS">Samoa</option>
                                                <option data-kt-flag="flags/san-marino.svg" value="SM">San Marino</option>
                                                <option data-kt-flag="flags/sao-tome-and-prince.svg" value="ST">Sao Tome and Principe</option>
                                                <option data-kt-flag="flags/saudi-arabia.svg" value="SA">Saudi Arabia</option>
                                                <option data-kt-flag="flags/senegal.svg" value="SN">Senegal</option>
                                                <option data-kt-flag="flags/serbia.svg" value="RS">Serbia</option>
                                                <option data-kt-flag="flags/seychelles.svg" value="SC">Seychelles</option>
                                                <option data-kt-flag="flags/sierra-leone.svg" value="SL">Sierra Leone</option>
                                                <option data-kt-flag="flags/singapore.svg" value="SG">Singapore</option>
                                                <option data-kt-flag="flags/sint-maarten.svg" value="SX">Sint Maarten (Dutch part)</option>
                                                <option data-kt-flag="flags/slovakia.svg" value="SK">Slovakia</option>
                                                <option data-kt-flag="flags/slovenia.svg" value="SI">Slovenia</option>
                                                <option data-kt-flag="flags/solomon-islands.svg" value="SB">Solomon Islands</option>
                                                <option data-kt-flag="flags/somalia.svg" value="SO">Somalia</option>
                                                <option data-kt-flag="flags/south-africa.svg" value="ZA">South Africa</option>
                                                <option data-kt-flag="flags/south-korea.svg" value="KR">South Korea</option>
                                                <option data-kt-flag="flags/south-sudan.svg" value="SS">South Sudan</option>
                                                <option data-kt-flag="flags/spain.svg" value="ES">Spain</option>
                                                <option data-kt-flag="flags/sri-lanka.svg" value="LK">Sri Lanka</option>
                                                <option data-kt-flag="flags/sudan.svg" value="SD">Sudan</option>
                                                <option data-kt-flag="flags/suriname.svg" value="SR">Suriname</option>
                                                <option data-kt-flag="flags/swaziland.svg" value="SZ">Swaziland</option>
                                                <option data-kt-flag="flags/sweden.svg" value="SE">Sweden</option>
                                                <option data-kt-flag="flags/switzerland.svg" value="CH">Switzerland</option>
                                                <option data-kt-flag="flags/syria.svg" value="SY">Syrian Arab Republic</option>
                                                <option data-kt-flag="flags/taiwan.svg" value="TW">Taiwan, Province of China</option>
                                                <option data-kt-flag="flags/tajikistan.svg" value="TJ">Tajikistan</option>
                                                <option data-kt-flag="flags/tanzania.svg" value="TZ">Tanzania, United Republic of</option>
                                                <option data-kt-flag="flags/thailand.svg" value="TH">Thailand</option>
                                                <option data-kt-flag="flags/togo.svg" value="TG">Togo</option>
                                                <option data-kt-flag="flags/tokelau.svg" value="TK">Tokelau</option>
                                                <option data-kt-flag="flags/tonga.svg" value="TO">Tonga</option>
                                                <option data-kt-flag="flags/trinidad-and-tobago.svg" value="TT">Trinidad and Tobago</option>
                                                <option data-kt-flag="flags/tunisia.svg" value="TN">Tunisia</option>
                                                <option data-kt-flag="flags/turkey.svg" value="TR">Turkey</option>
                                                <option data-kt-flag="flags/turkmenistan.svg" value="TM">Turkmenistan</option>
                                                <option data-kt-flag="flags/turks-and-caicos.svg" value="TC">Turks and Caicos Islands</option>
                                                <option data-kt-flag="flags/tuvalu.svg" value="TV">Tuvalu</option>
                                                <option data-kt-flag="flags/uganda.svg" value="UG">Uganda</option>
                                                <option data-kt-flag="flags/ukraine.svg" value="UA">Ukraine</option>
                                                <option data-kt-flag="flags/united-arab-emirates.svg" value="AE">United Arab Emirates</option>
                                                <option data-kt-flag="flags/united-kingdom.svg" value="GB">United Kingdom</option>
                                                <option data-kt-flag="flags/united-states.svg" value="US">United States</option>
                                                <option data-kt-flag="flags/uruguay.svg" value="UY">Uruguay</option>
                                                <option data-kt-flag="flags/uzbekistan.svg" value="UZ">Uzbekistan</option>
                                                <option data-kt-flag="flags/vanuatu.svg" value="VU">Vanuatu</option>
                                                <option data-kt-flag="flags/venezuela.svg" value="VE">Venezuela, Bolivarian Republic of</option>
                                                <option data-kt-flag="flags/vietnam.svg" value="VN">Vietnam</option>
                                                <option data-kt-flag="flags/virgin-islands.svg" value="VI">Virgin Islands</option>
                                                <option data-kt-flag="flags/yemen.svg" value="YE">Yemen</option>
                                                <option data-kt-flag="flags/zambia.svg" value="ZM">Zambia</option>
                                                <option data-kt-flag="flags/zimbabwe.svg" value="ZW">Zimbabwe</option>
                                        </select>
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->


    <!--begin::Input group-->
    <div class="row mb-6">
        <!--begin::Label-->
        <label class="col-lg-4 col-form-label fw-semibold fs-6">
            <span class="required">Marital status</span>

            
<span class="ms-1"  data-bs-toggle="tooltip" title="Country of origination" >
<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>                    </label>
        <!--end::Label-->

        <!--begin::Col-->
        <div class="col-lg-8 fv-row">
            <select name="marital" aria-label="Select a Country" data-control="select2" data-placeholder="Select a country..." class="form-select form-select-solid form-select-lg fw-semibold">
                <option value="">Select Status...</option>                 
                <option  value="Single">Single</option>
                <option  value="Married">Married</option>
                <option  value="Divoured">Divoured</option>
            </select>
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->

   
      

    <!--begin::Input group-->
    <div class="row mb-6">
        <!--begin::Label-->
        <label class="col-lg-4 col-form-label fw-semibold fs-6">Number of Children</label>
        <!--end::Label-->

        <!--begin::Col-->
        <div class="col-lg-8 fv-row">
            <input type="number" name="children" class="form-control form-control-lg form-control-solid" placeholder="No. of children" required />
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->



<!--begin::Input group-->
<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required  fw-semibold fs-6">School</label>
    <!--end::Label-->

    <!--begin::Col-->
    <div class="col-lg-8 fv-row">
        <input type="text" name="school" class="form-control form-control-lg form-control-solid" 
        placeholder="School" required />
    </div>
    <!--end::Col-->
</div>
<!--end::Input group-->



<!--begin::Input group-->
<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Department</label>
    <!--end::Label-->

    <!--begin::Col-->
    <div class="col-lg-8 fv-row">
        <input type="text" name="department" class="form-control form-control-lg form-control-solid"
         placeholder="Department" required />
    </div>
    <!--end::Col-->
</div>
<!--end::Input group-->


<!--begin::Input group-->
<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Date/Grade of First Appointment</label>
    <!--end::Label-->

    <!--begin::Col-->
    <div class="col-lg-8">
        <!--begin::Row-->
        <div class="row">
            <!--begin::Col-->
            <div class="col-lg-6 fv-row">
                Date:<input type="date" name="dateofapp" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                 placeholder="From" required />
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-lg-6 fv-row">
               Grade: <input type="text" name="grade" class="form-control form-control-lg form-control-solid" 
               placeholder="Grade on first Appointment"  required />
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Col-->
</div>
<!--end::Input group-->




    <!--begin::Input group-->
    <div class="row mb-6">
        <!--begin::Label-->
        <label class="col-lg-4 col-form-label fw-semibold fs-6">
            <span class="required">Appointment Confirmed ?</span>

            
<span class="ms-1"  data-bs-toggle="tooltip" title="Country of origination" >
<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>                    </label>
        <!--end::Label-->

        <!--begin::Col-->
        <div class="col-lg-8 fv-row">
            <select name="confirmapp" aria-label="Select a Country" data-control="select2" data-placeholder="Select your answer" 
            class="form-select form-select-solid form-select-lg fw-semibold" required>
                <option value="">Select your answer...</option>                 
                <option  value="Yes">Yes</option>
                <option  value="No">No</option>
                <option  value="Not Yet">Not Yet</option>
            </select>
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->




    <!--begin::Input group-->
<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label fw-semibold fs-6">Date of Confirmation</label>
    <!--end::Label-->

    <!--begin::Col-->
    <div class="col-lg-8 fv-row">
        <input type="date" name="dateconfirm" class="form-control form-control-lg form-control-solid"
         placeholder="Date of Confrimation" required />
    </div>
    <!--end::Col-->
</div>
<!--end::Input group-->



<!--begin::Input group-->
<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Date/Grade of Last Promotion</label>
    <!--end::Label-->

    <!--begin::Col-->
    <div class="col-lg-8">
        <!--begin::Row-->
        <div class="row">
            <!--begin::Col-->
            <div class="col-lg-6 fv-row">
                Date:<input type="date" name="dateofpromotion" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                 placeholder="From" required />
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-lg-6 fv-row">
               Grade: <input type="text" name="gradeofpromotion" class="form-control form-control-lg form-control-solid" 
               placeholder="Grade on Last Promotion"  required />
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Col-->
</div>
<!--end::Input group-->


<!--begin::Input group-->
<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Date/Grade of Current Appointment : (if different from above)</label>
    <!--end::Label-->

    <!--begin::Col-->
    <div class="col-lg-8">
        <!--begin::Row-->
        <div class="row">
            <!--begin::Col-->
            <div class="col-lg-6 fv-row">
                Date:<input type="date" name="dateofcurrentapp" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                 placeholder="From" required />
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-lg-6 fv-row">
               Grade: <input type="text" name="grade" class="form-control form-control-lg form-control-solid" 
               placeholder="Grade of Current Appointment"  required />
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Col-->
</div>
<!--end::Input group-->



<!--begin::Input group-->
<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Present Salary/Step</label>
    <!--end::Label-->

    <!--begin::Col-->
    <div class="col-lg-8">
        <!--begin::Row-->
        <div class="row">
            <!--begin::Col-->
            <div class="col-lg-6 fv-row">
                Salary:<input type="date" name="salary" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                 placeholder="Presnet salary" required />
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-lg-6 fv-row">
               step/Level: <input type="text" name="step" class="form-control form-control-lg form-control-solid" 
               placeholder="Step"  required />
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Col-->
</div>
<!--end::Input group-->


    
<!--begin::Input group-->
<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required  fw-semibold fs-6">Courses attended during the period of Report</label>
    <!--end::Label-->

    <!--begin::Col-->
    <div class="col-lg-8 fv-row">
        <input type="text" name="courses" class="form-control form-control-lg form-control-solid" 
        placeholder="Courses attended during the period of Report" required />
    </div>
    <!--end::Col-->
</div>
<!--end::Input group-->

<!--begin::Notice-->
<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
    <!--begin::Icon-->
    <i class="ki-duotone ki-design-1 fs-2tx text-primary me-4"></i>        <!--end::Icon-->
    
    <!--begin::Wrapper-->
    <div class="d-flex flex-stack flex-grow-1 ">
            <!--begin::Content-->
    <div class=" fw-semibold">
    <div class="fs-6 text-gray-700 ">ACADEMIC  QUALIFICATIONS </div>
    </div>
    <!--end::Content-->
    
    </div>
    <!--end::Wrapper-->  
    </div>
    <!--end::Notice-->


<!--begin::Input group-->
<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Qualifications 1</label>
    <!--end::Label-->

    <!--begin::Col-->
    <div class="col-lg-8">
        <!--begin::Row-->
        <div class="row">
            <!--begin::Col-->
            <div class="col-lg-6 fv-row">
          University/HND  <select name="unihnd1" aria-label="Select a Country" data-control="select2" data-placeholder="Select your answer" 
            class="form-control form-control-lg form-control-solid" required>
                <option value="">Select your answer...</option>                 
                <option  value="University Degree">University Degree</option>
                <option  value="HND">HND</option>
            </select>
        </div>
        <!--end::Col-->
            <!--begin::Col-->
            <div class="col-lg-6 fv-row">
              Class: <input type="text" name="unihndclass1" class="form-control form-control-lg form-control-solid" 
               placeholder="class if any"  required />
            </div>
            <!--end::Col-->
             <!--begin::Col-->
             <div class="col-lg-6 fv-row">
                Institution: <input type="text" name="institution1" class="form-control form-control-lg form-control-solid" 
                placeholder="institution"  required />
             </div>
             <!--end::Col-->
              <!--begin::Col-->
            <div class="col-lg-6 fv-row">
                Date Of Award: <input type="date" name="dateofaward1" class="form-control form-control-lg form-control-solid" 
                placeholder="Date of Award"  required />
             </div>
             <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Col-->

</div>
<!--end::Input group-->


<!--begin::Input group-->
<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Qualifications 2</label>
    <!--end::Label-->

    <!--begin::Col-->
    <div class="col-lg-8">
        <!--begin::Row-->
        <div class="row">
            <!--begin::Col-->
            <div class="col-lg-6 fv-row">
          University/HND  <select name="unihnd2" aria-label="Select a Country" data-control="select2" data-placeholder="Select your answer" 
            class="form-control form-control-lg form-control-solid" required>
                <option value="">Select your answer...</option>                 
                <option  value="University Degree">University Degree</option>
                <option  value="HND">HND</option>
            </select>
        </div>
        <!--end::Col-->
            <!--begin::Col-->
            <div class="col-lg-6 fv-row">
              Class: <input type="text" name="unihndclass2" class="form-control form-control-lg form-control-solid" 
               placeholder="class if any"  required />
            </div>
            <!--end::Col-->
             <!--begin::Col-->
             <div class="col-lg-6 fv-row">
                Institution: <input type="text" name="institution2" class="form-control form-control-lg form-control-solid" 
                placeholder="institution"  required />
             </div>
             <!--end::Col-->
              <!--begin::Col-->
            <div class="col-lg-6 fv-row">
                Date Of Award: <input type="date" name="dateofaward2" class="form-control form-control-lg form-control-solid" 
                placeholder="Date of Award"  required />
             </div>
             <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Col-->

</div>
<!--end::Input group-->


<!--begin::Input group-->
<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Qualifications 3</label>
    <!--end::Label-->

    <!--begin::Col-->
    <div class="col-lg-8">
        <!--begin::Row-->
        <div class="row">
            <!--begin::Col-->
            <div class="col-lg-6 fv-row">
          University/HND  <select name="unihnd3" aria-label="Select a Country" data-control="select2" data-placeholder="Select your answer" 
            class="form-control form-control-lg form-control-solid" required>
                <option value="">Select your answer...</option>                 
                <option  value="University Degree">University Degree</option>
                <option  value="HND">HND</option>
            </select>
        </div>
        <!--end::Col-->
            <!--begin::Col-->
            <div class="col-lg-6 fv-row">
              Class: <input type="text" name="unihndclass3" class="form-control form-control-lg form-control-solid" 
               placeholder="class if any"  required />
            </div>
            <!--end::Col-->
             <!--begin::Col-->
             <div class="col-lg-6 fv-row">
                Institution: <input type="text" name="institution3" class="form-control form-control-lg form-control-solid" 
                placeholder="institution"  required />
             </div>
             <!--end::Col-->
              <!--begin::Col-->
            <div class="col-lg-6 fv-row">
                Date Of Award: <input type="date" name="dateofaward3" class="form-control form-control-lg form-control-solid" 
                placeholder="Date of Award"  required />
             </div>
             <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Col-->

</div>
<!--end::Input group-->

<!--begin::Notice-->
<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
    <!--begin::Icon-->
    <i class="ki-duotone ki-design-1 fs-2tx text-primary me-4"></i>        <!--end::Icon-->
    
    <!--begin::Wrapper-->
    <div class="d-flex flex-stack flex-grow-1 ">
                    <!--begin::Content-->
            <div class=" fw-semibold">
            <div class="fs-6 text-gray-700 ">PROFESSIONAL QUALIFICATIONS </div>
            </div>
            <!--end::Content-->
            
            </div>
            <!--end::Wrapper-->  
</div>
    <!--end::Notice-->






<!--begin::Input group-->
<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Professional Qualifications 1</label>
    <!--end::Label-->

    <!--begin::Col-->
    <div class="col-lg-8">
        <!--begin::Row-->
        <div class="row">
           
            <!--begin::Col-->
            <div class="col-lg-6 fv-row">
             Qualification 1: <input type="text" name="pqualification1" class="form-control form-control-lg form-control-solid" 
               placeholder="Professional qualification"  required />
            </div>
            <!--end::Col-->
             <!--begin::Col-->
             <div class="col-lg-6 fv-row">
                AwardingBody/society: <input type="text" name="abody1" class="form-control form-control-lg form-control-solid" 
                placeholder="awarding Body"  required />
             </div>
             <!--end::Col-->
              <!--begin::Col-->
            <div class="col-lg-6 fv-row">
                Date Of Award: <input type="date" name="pdateofaward1" class="form-control form-control-lg form-control-solid" 
                placeholder="Date of Award"  required />
             </div>
             <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Col-->

</div>
<!--end::Input group-->



<!--begin::Input group-->
<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Professional Qualifications 2</label>
    <!--end::Label-->

    <!--begin::Col-->
    <div class="col-lg-8">
        <!--begin::Row-->
        <div class="row">
           
            <!--begin::Col-->
            <div class="col-lg-6 fv-row">
             Qualification 2: <input type="text" name="pqualification2" class="form-control form-control-lg form-control-solid" 
               placeholder="Professional qualification"  required />
            </div>
            <!--end::Col-->
             <!--begin::Col-->
             <div class="col-lg-6 fv-row">
                AwardingBody/society: <input type="text" name="abody2" class="form-control form-control-lg form-control-solid" 
                placeholder="awarding Body"  required />
             </div>
             <!--end::Col-->
              <!--begin::Col-->
            <div class="col-lg-6 fv-row">
                Date Of Award: <input type="date" name="pdateofaward2" class="form-control form-control-lg form-control-solid" 
                placeholder="Date of Award"  required />
             </div>
             <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Col-->

</div>
<!--end::Input group-->



<!--begin::Input group-->
<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Professional Qualifications 1</label>
    <!--end::Label-->

    <!--begin::Col-->
    <div class="col-lg-8">
        <!--begin::Row-->
        <div class="row">
           
            <!--begin::Col-->
            <div class="col-lg-6 fv-row">
             Qualification 3: <input type="text" name="pqualification3" class="form-control form-control-lg form-control-solid" 
               placeholder="Professional qualification"  required />
            </div>
            <!--end::Col-->
             <!--begin::Col-->
             <div class="col-lg-6 fv-row">
                AwardingBody/society: <input type="text" name="abody3" class="form-control form-control-lg form-control-solid" 
                placeholder="awarding Body"  required />
             </div>
             <!--end::Col-->
              <!--begin::Col-->
            <div class="col-lg-6 fv-row">
                Date Of Award: <input type="date" name="pdateofaward3" class="form-control form-control-lg form-control-solid" 
                placeholder="Date of Award"  required />
             </div>
             <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Col-->

</div>
<!--end::Input group-->



<!--begin::Notice-->
<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
    <!--begin::Icon-->
    <i class="ki-duotone ki-design-1 fs-2tx text-primary me-4"></i>        <!--end::Icon-->
    
    <!--begin::Wrapper-->
    <div class="d-flex flex-stack flex-grow-1 ">
                    <!--begin::Content-->
            <div class=" fw-semibold">
            <div class="fs-6 text-gray-700 ">EXPERIENCE</div>
            </div>
            <!--end::Content-->
            
            </div>
            <!--end::Wrapper-->  
</div>
    <!--end::Notice-->


<!--begin::Input group-->
<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required  fw-semibold fs-6">Teaching Experience: (please indicate Institution, your designation, your area of Specialization, Subject taught and dates</label>
    <!--end::Label-->

    <!--begin::Col-->
    <div class="col-lg-8 fv-row">
        <input type="text" name="teachingexperience" class="form-control form-control-lg form-control-solid" 
        placeholder="Teaching Experience" required />
    </div>
    <!--end::Col-->
</div>
<!--end::Input group-->

<!--begin::Input group-->
<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required  fw-semibold fs-6">Courses taught within the Current Academic Session</label>
    <!--end::Label-->

    <!--begin::Col-->
    <div class="col-lg-8 fv-row">
        <input type="text" name="coursestought" class="form-control form-control-lg form-control-solid" 
        placeholder="Teaching Experience" required />
    </div>
    <!--end::Col-->
</div>
<!--end::Input group-->


<!--begin::Input group-->
<div class="row mb-6">
    <!--begin::Label-->
    <label class="col-lg-4 col-form-label required  fw-semibold fs-6">supervisions</label>
    <!--end::Label-->

    <!--begin::Col-->
    <div class="col-lg-8 fv-row">
        <input type="text" name="supervision" class="form-control form-control-lg form-control-solid" 
        placeholder="supervision" required />
    </div>
    <!--end::Col-->
</div>
<!--end::Input group-->




</div>
<!--end::Card body-->



<!--begin::Actions-->
<div class="card-footer d-flex justify-content-end py-6 px-9">
    <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
</div>
<!--end::Actions-->
</form>
<!--end::Form-->
</div>
<!--end::Content-->
</div>
<!--end::Basic info-->


<!--begin::Sign-in Method-->
<div class="card  mb-5 mb-xl-10"   >
<!--begin::Card header-->
<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
<div class="card-title m-0">
<h3 class="fw-bold m-0">Sign-in Method</h3>
</div>
</div>
<!--end::Card header-->

<!--begin::Content-->
<div id="kt_account_settings_signin_method" class="collapse show">
<!--begin::Card body-->
<div class="card-body border-top p-9">
<!--begin::Email Address-->
<div class="d-flex flex-wrap align-items-center">
    <!--begin::Label-->
    <div id="kt_signin_email">
        <div class="fs-6 fw-bold mb-1">Email Address</div>
        <div class="fw-semibold text-gray-600">support@keenthemes.com</div>
    </div>
    <!--end::Label-->

    <!--begin::Edit-->
    <div id="kt_signin_email_edit" class="flex-row-fluid d-none">
        <!--begin::Form-->
        <form id="kt_signin_change_email" class="form" novalidate="novalidate">
            <div class="row mb-6">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="fv-row mb-0">
                        <label for="emailaddress" class="form-label fs-6 fw-bold mb-3">Enter New Email Address</label>
                        <input type="email" class="form-control form-control-lg form-control-solid" id="emailaddress" placeholder="Email Address" name="emailaddress" value="support@keenthemes.com" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="fv-row mb-0">
                        <label for="confirmemailpassword" class="form-label fs-6 fw-bold mb-3">Confirm Password</label>
                        <input type="password" class="form-control form-control-lg form-control-solid" name="confirmemailpassword" id="confirmemailpassword" />
                    </div>
                </div>
            </div>
            <div class="d-flex">
                <button id="kt_signin_submit" type="button" class="btn btn-primary  me-2 px-6">Update Email</button>
                <button id="kt_signin_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
            </div>
        </form>
        <!--end::Form-->
    </div>
    <!--end::Edit-->

    <!--begin::Action-->
    <div id="kt_signin_email_button" class="ms-auto">
        <button class="btn btn-light btn-active-light-primary">Change Email</button>
    </div>
    <!--end::Action-->
</div>
<!--end::Email Address-->

<!--begin::Separator-->
<div class="separator separator-dashed my-6"></div>
<!--end::Separator-->

<!--begin::Password-->
<div class="d-flex flex-wrap align-items-center mb-10">
    <!--begin::Label-->
    <div id="kt_signin_password">
        <div class="fs-6 fw-bold mb-1">Password</div>
        <div class="fw-semibold text-gray-600">************</div>
    </div>
    <!--end::Label-->

    <!--begin::Edit-->
    <div id="kt_signin_password_edit" class="flex-row-fluid d-none">
        <!--begin::Form-->
        <form id="kt_signin_change_password" class="form" novalidate="novalidate">
            <div class="row mb-1">
                <div class="col-lg-4">
                    <div class="fv-row mb-0">
                        <label for="currentpassword" class="form-label fs-6 fw-bold mb-3">Current Password</label>
                        <input type="password" class="form-control form-control-lg form-control-solid " name="currentpassword" id="currentpassword" />
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="fv-row mb-0">
                        <label for="newpassword" class="form-label fs-6 fw-bold mb-3">New Password</label>
                        <input type="password" class="form-control form-control-lg form-control-solid " name="newpassword" id="newpassword" />
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="fv-row mb-0">
                        <label for="confirmpassword" class="form-label fs-6 fw-bold mb-3">Confirm New Password</label>
                        <input type="password" class="form-control form-control-lg form-control-solid " name="confirmpassword" id="confirmpassword" />
                    </div>
                </div>
            </div>
            
            <div class="form-text mb-5">Password must be at least 8 character and contain symbols</div>

            <div class="d-flex">
                <button id="kt_password_submit" type="button" class="btn btn-primary me-2 px-6">Update Password</button>
                <button id="kt_password_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
            </div>
        </form>
        <!--end::Form-->
    </div>
    <!--end::Edit-->

    <!--begin::Action-->
    <div id="kt_signin_password_button" class="ms-auto">
        <button class="btn btn-light btn-active-light-primary">Reset Password</button>
    </div>
    <!--end::Action-->
</div>
<!--end::Password-->


<!--begin::Notice-->
<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed  p-6">
<!--begin::Icon-->
<i class="ki-duotone ki-shield-tick fs-2tx text-primary me-4"><span class="path1"></span><span class="path2"></span></i>        <!--end::Icon-->

<!--begin::Wrapper-->
<div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
        <!--begin::Content-->
<div class="mb-3 mb-md-0 fw-semibold">
                        <h4 class="text-gray-900 fw-bold">Secure Your Account</h4>
    
                        <div class="fs-6 text-gray-700 pe-7">Two-factor authentication adds an extra layer of security to your account. To log in, in addition you'll need to provide a 6 digit code</div>
                </div>
<!--end::Content-->

        <!--begin::Action-->
<a href="#" class="btn btn-primary px-6 align-self-center text-nowrap"  data-bs-toggle="modal" data-bs-target="#kt_modal_two_factor_authentication" > 
    Enable            </a>
<!--end::Action-->
</div>
<!--end::Wrapper-->  
</div>
<!--end::Notice-->
</div>
<!--end::Card body-->
</div>
<!--end::Content-->
</div>
<!--end::Sign-in Method-->

<!--begin::Connected Accounts-->
<div class="card mb-5 mb-xl-10">
<!--begin::Card header-->
<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_connected_accounts" aria-expanded="true" aria-controls="kt_account_connected_accounts">
<div class="card-title m-0">
<h3 class="fw-bold m-0">Connected Accounts</h3>
</div>
</div>
<!--end::Card header-->

<!--begin::Content-->
<div id="kt_account_settings_connected_accounts" class="collapse show">
<!--begin::Card body-->
<div class="card-body border-top p-9">

<!--begin::Notice-->
<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
<!--begin::Icon-->
<i class="ki-duotone ki-design-1 fs-2tx text-primary me-4"></i>        <!--end::Icon-->

<!--begin::Wrapper-->
<div class="d-flex flex-stack flex-grow-1 ">
        <!--begin::Content-->
<div class=" fw-semibold">
<div class="fs-6 text-gray-700 ">Two-factor authentication adds an extra layer of security to your account. To log in, in you'll need to provide a 4 digit amazing code. <a href="#" class="fw-bold">Learn More</a></div>
</div>
<!--end::Content-->

</div>
<!--end::Wrapper-->  
</div>
<!--end::Notice-->

<!--begin::Items-->
<div class="py-2">
    <!--begin::Item-->
    <div class="d-flex flex-stack">
        <div class="d-flex">
            <img src="../assets/media/svg/brand-logos/google-icon.svg" class="w-30px me-6" alt="" />

            <div class="d-flex flex-column">
                <a href="#" class="fs-5 text-dark text-hover-primary fw-bold">Google</a>
                <div class="fs-6 fw-semibold text-gray-400">Plan properly your workflow</div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <div class="form-check form-check-solid form-check-custom form-switch">
                <input class="form-check-input w-45px h-30px" type="checkbox" id="googleswitch" checked />
                <label class="form-check-label" for="googleswitch"></label>
            </div>
        </div>
    </div>
    <!--end::Item-->

    <div class="separator separator-dashed my-5"></div>

    <!--begin::Item-->
    <div class="d-flex flex-stack">
        <div class="d-flex">
            <img src="../assets/media/svg/brand-logos/github.svg" class="w-30px me-6" alt=""/>

            <div class="d-flex flex-column">
                <a href="#" class="fs-5 text-dark text-hover-primary fw-bold">Github</a>
                <div class="fs-6 fw-semibold text-gray-400">Keep eye on on your Repositories</div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <div class="form-check form-check-solid form-check-custom form-switch">
                <input class="form-check-input w-45px h-30px" type="checkbox" id="githubswitch" checked />
                <label class="form-check-label" for="githubswitch"></label>
            </div>
        </div>
    </div>
    <!--end::Item-->

    <div class="separator separator-dashed my-5"></div>

    <!--begin::Item-->
    <div class="d-flex flex-stack">
        <div class="d-flex">
            <img src="../assets/media/svg/brand-logos/slack-icon.svg" class="w-30px me-6" alt=""/>

            <div class="d-flex flex-column">
                <a href="#" class="fs-5 text-dark text-hover-primary fw-bold">Slack</a>
                <div class="fs-6 fw-semibold text-gray-400">Integrate Projects Discussions</div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <div class="form-check form-check-solid form-check-custom form-switch">
                <input class="form-check-input w-45px h-30px" type="checkbox" id="slackswitch" />
                <label class="form-check-label" for="slackswitch"></label>
            </div>                      
        </div>
    </div>
    <!--end::Item-->
</div>
<!--end::Items-->
</div>
<!--end::Card body-->

<!--begin::Card footer-->
<div class="card-footer d-flex justify-content-end py-6 px-9">
<button class="btn btn-light btn-active-light-primary me-2">Discard</button>
<button class="btn btn-primary">Save Changes</button>
</div>
<!--end::Card footer-->
</div>
<!--end::Content-->
</div>
<!--end::Connected Accounts-->

<!--begin::Notifications-->
<div class="card mb-5 mb-xl-10">
<!--begin::Card header-->
<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_email_preferences" aria-expanded="true" aria-controls="kt_account_email_preferences">
<div class="card-title m-0">
<h3 class="fw-bold m-0">Email Preferences</h3>
</div>
</div>
<!--begin::Card header-->

<!--begin::Content-->
<div id="kt_account_settings_email_preferences" class="collapse show">
<!--begin::Form-->
<form class="form">
<!--begin::Card body-->
<div class="card-body border-top px-9 py-9">
                        <!--begin::Option-->
        <label class="form-check form-check-custom form-check-solid align-items-start">
            <!--begin::Input-->
            <input class="form-check-input me-3" type="checkbox" name="email-preferences[]"  value="1"/>
            <!--end::Input-->

            <!--begin::Label-->
            <span class="form-check-label d-flex flex-column align-items-start">
                <span class="fw-bold fs-5 mb-0">Successful Payments</span>
                <span class="text-muted fs-6">Receive a notification for every successful payment.</span>
            </span>
            <!--end::Label-->
        </label>
        <!--end::Option-->

                            <!--begin::Option-->
        <div class="separator separator-dashed my-6"></div>
        <!--end::Option-->
                                            <!--begin::Option-->
        <label class="form-check form-check-custom form-check-solid align-items-start">
            <!--begin::Input-->
            <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" checked="checked" value="1"/>
            <!--end::Input-->

            <!--begin::Label-->
            <span class="form-check-label d-flex flex-column align-items-start">
                <span class="fw-bold fs-5 mb-0">Payouts</span>
                <span class="text-muted fs-6">Receive a notification for every initiated payout.</span>
            </span>
            <!--end::Label-->
        </label>
        <!--end::Option-->

                            <!--begin::Option-->
        <div class="separator separator-dashed my-6"></div>
        <!--end::Option-->
                                            <!--begin::Option-->
        <label class="form-check form-check-custom form-check-solid align-items-start">
            <!--begin::Input-->
            <input class="form-check-input me-3" type="checkbox" name="email-preferences[]"  value="1"/>
            <!--end::Input-->

            <!--begin::Label-->
            <span class="form-check-label d-flex flex-column align-items-start">
                <span class="fw-bold fs-5 mb-0">Fee Collection</span>
                <span class="text-muted fs-6">Receive a notification each time you collect a fee from sales</span>
            </span>
            <!--end::Label-->
        </label>
        <!--end::Option-->

                            <!--begin::Option-->
        <div class="separator separator-dashed my-6"></div>
        <!--end::Option-->
                                            <!--begin::Option-->
        <label class="form-check form-check-custom form-check-solid align-items-start">
            <!--begin::Input-->
            <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" checked="checked" value="1"/>
            <!--end::Input-->

            <!--begin::Label-->
            <span class="form-check-label d-flex flex-column align-items-start">
                <span class="fw-bold fs-5 mb-0">Customer Payment Dispute</span>
                <span class="text-muted fs-6">Receive a notification if a payment is disputed by a customer and for dispute purposes.</span>
            </span>
            <!--end::Label-->
        </label>
        <!--end::Option-->

                            <!--begin::Option-->
        <div class="separator separator-dashed my-6"></div>
        <!--end::Option-->
                                            <!--begin::Option-->
        <label class="form-check form-check-custom form-check-solid align-items-start">
            <!--begin::Input-->
            <input class="form-check-input me-3" type="checkbox" name="email-preferences[]"  value="1"/>
            <!--end::Input-->

            <!--begin::Label-->
            <span class="form-check-label d-flex flex-column align-items-start">
                <span class="fw-bold fs-5 mb-0">Refund Alerts</span>
                <span class="text-muted fs-6">Receive a notification if a payment is stated as risk by the Finance Department.</span>
            </span>
            <!--end::Label-->
        </label>
        <!--end::Option-->

                            <!--begin::Option-->
        <div class="separator separator-dashed my-6"></div>
        <!--end::Option-->
                                            <!--begin::Option-->
        <label class="form-check form-check-custom form-check-solid align-items-start">
            <!--begin::Input-->
            <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" checked="checked" value="1"/>
            <!--end::Input-->

            <!--begin::Label-->
            <span class="form-check-label d-flex flex-column align-items-start">
                <span class="fw-bold fs-5 mb-0">Invoice Payments</span>
                <span class="text-muted fs-6">Receive a notification if a customer sends an incorrect amount to pay their invoice.</span>
            </span>
            <!--end::Label-->
        </label>
        <!--end::Option-->

                            <!--begin::Option-->
        <div class="separator separator-dashed my-6"></div>
        <!--end::Option-->
                                            <!--begin::Option-->
        <label class="form-check form-check-custom form-check-solid align-items-start">
            <!--begin::Input-->
            <input class="form-check-input me-3" type="checkbox" name="email-preferences[]"  value="1"/>
            <!--end::Input-->

            <!--begin::Label-->
            <span class="form-check-label d-flex flex-column align-items-start">
                <span class="fw-bold fs-5 mb-0">Webhook API Endpoints</span>
                <span class="text-muted fs-6">Receive notifications for consistently failing webhook API endpoints.</span>
            </span>
            <!--end::Label-->
        </label>
        <!--end::Option-->

                                    </div>
<!--end::Card body-->

<!--begin::Card footer-->
<div class="card-footer d-flex justify-content-end py-6 px-9">
    <button class="btn btn-light btn-active-light-primary me-2">Discard</button>
    <button class="btn btn-primary  px-6">Save Changes</button>
</div>
<!--end::Card footer-->
</form>
<!--end::Form-->
</div>
<!--end::Content-->
</div>
<!--end::Notifications-->
<!--begin::Notifications-->
<div class="card  mb-5 mb-xl-10"   >
<!--begin::Card header-->
<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_notifications" aria-expanded="true" aria-controls="kt_account_notifications">
<div class="card-title m-0">
<h3 class="fw-bold m-0">Notifications</h3>
</div>
</div>
<!--begin::Card header-->

<!--begin::Content-->
<div id="kt_account_settings_notifications" class="collapse show">
<!--begin::Form-->
<form class="form">
<!--begin::Card body-->
<div class="card-body border-top px-9 pt-3 pb-4">
    <!--begin::Table-->
    <div class="table-responsive">
        <table class="table table-row-dashed border-gray-300 align-middle gy-6">
            <tbody class="fs-6 fw-semibold">
                <!--begin::Table row-->
                <tr>
                    <td class="min-w-250px fs-4 fw-bold">Notifications</td>
                    <td class="w-125px">
                        <div class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_email" checked data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=email]" />
                            <label class="form-check-label ps-2" for="kt_settings_notification_email">
                                Email
                            </label>
                        </div>
                    </td>
                    <td class="w-125px">
                        <div class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_phone" checked data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=phone]" />
                            <label class="form-check-label ps-2" for="kt_settings_notification_phone">
                                Phone
                            </label>
                        </div>
                    </td>
                </tr>
                <!--begin::Table row-->

                <!--begin::Table row-->
                <tr>
                    <td>Billing Updates</td>
                    <td>
                        <div class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" id="billing1" checked data-kt-settings-notification="email" />
                            <label class="form-check-label ps-2" for="billing1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="" id="billing2" checked data-kt-settings-notification="phone" />
                            <label class="form-check-label ps-2" for="billing2"></label>
                        </div>
                    </td>
                </tr>
                <!--begin::Table row-->

                <!--begin::Table row-->
                <tr>
                    <td>New Team Members</td>
                    <td>
                        <div class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="" id="team1" checked data-kt-settings-notification="email" />
                            <label class="form-check-label ps-2" for="team1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="" id="team2" data-kt-settings-notification="phone" />
                            <label class="form-check-label ps-2" for="team2"></label>
                        </div>
                    </td>
                </tr>
                <!--begin::Table row-->

                <!--begin::Table row-->
                <tr>
                    <td>Completed Projects</td>
                    <td>
                        <div class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="" id="project1" data-kt-settings-notification="email" />
                            <label class="form-check-label ps-2" for="project1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="" id="project2" checked data-kt-settings-notification="phone" />
                            <label class="form-check-label ps-2" for="project2"></label>
                        </div>
                    </td>
                </tr>
                <!--begin::Table row-->

                <!--begin::Table row-->
                <tr>
                    <td class="border-bottom-0">Newsletters</td>
                    <td class="border-bottom-0">
                        <div class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="" id="newsletter1" data-kt-settings-notification="email" />
                            <label class="form-check-label ps-2" for="newsletter1"></label>
                        </div>
                    </td>
                    <td class="border-bottom-0">
                        <div class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="" id="newsletter2" data-kt-settings-notification="phone" />
                            <label class="form-check-label ps-2" for="newsletter2"></label>
                        </div>
                    </td>
                </tr>
                <!--begin::Table row-->
            </tbody>
        </table>
    </div>
    <!--end::Table-->
</div>
<!--end::Card body-->

<!--begin::Card footer-->
<div class="card-footer d-flex justify-content-end py-6 px-9">
    <button class="btn btn-light btn-active-light-primary me-2">Discard</button>
    <button class="btn btn-primary  px-6">Save Changes</button>
</div>
<!--end::Card footer-->
</form>
<!--end::Form-->
</div>
<!--end::Content-->
</div>
<!--end::Notifications-->
<!--begin::Deactivate Account-->
<div class="card  "   >

<!--begin::Card header-->
<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_deactivate" aria-expanded="true" aria-controls="kt_account_deactivate">
<div class="card-title m-0">
<h3 class="fw-bold m-0">Deactivate Account</h3>
</div>
</div>
<!--end::Card header-->

<!--begin::Content-->
<div id="kt_account_settings_deactivate" class="collapse show">
<!--begin::Form-->
<form id="kt_account_deactivate_form" class="form">

<!--begin::Card body-->
<div class="card-body border-top p-9">
    
<!--begin::Notice-->
<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
<!--begin::Icon-->
<i class="ki-duotone ki-information fs-2tx text-warning me-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>        <!--end::Icon-->

<!--begin::Wrapper-->
<div class="d-flex flex-stack flex-grow-1 ">
        <!--begin::Content-->
<div class=" fw-semibold">
                        <h4 class="text-gray-900 fw-bold">You Are Deactivating Your Account</h4>
    
                        <div class="fs-6 text-gray-700 ">For extra security, this requires you to confirm your email or phone number when you reset yousignr password. <br/><a class="fw-bold" href="#">Learn more</a></div>
                </div>
<!--end::Content-->

</div>
<!--end::Wrapper-->  
</div>
<!--end::Notice-->

    <!--begin::Form input row-->
    <div class="form-check form-check-solid fv-row">
        <input name="deactivate" class="form-check-input" type="checkbox" value="" id="deactivate" />
        <label class="form-check-label fw-semibold ps-2 fs-6" for="deactivate">I confirm my account deactivation</label>
    </div>
    <!--end::Form input row-->
</div>
<!--end::Card body-->

<!--begin::Card footer-->
<div class="card-footer d-flex justify-content-end py-6 px-9">
    <button id="kt_account_deactivate_account_submit" type="submit" class="btn btn-danger fw-semibold">Deactivate Account</button>
</div>
<!--end::Card footer-->

</form>
<!--end::Form-->
</div>
<!--end::Content-->
</div>
<!--end::Deactivate Account-->        </div>
<!--end::Content container-->
</div>
<!--end::Content-->					
    </div>
   	
@endsection   


    