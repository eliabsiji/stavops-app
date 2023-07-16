@extends('layouts.master')
@section('content')
          
   <!--begin::Main-->
   <div class="app-main flex-column flex-row-fluid" id="kt_app_main">



 <!--begin::Content container-->
 <div id="kt_app_content_container" class="app-container  container-xxl ">
            
    <!--begin::Navbar-->
    <div class="card mb-5 mb-xl-10">
        <div class="card-body pt-9 pb-0">
            <!--begin::Details-->
       
         @include('layouts.inc.academicnavbar')

        </div>
    </div>
    <!--end::Navbar-->

        <!--begin::Basic info-->
        <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
        <!--begin::Card title-->
        <div class="card-title m-0">
        <h3 class="fw-bold m-0">PART B (To be completed by Head of Department)</h3>
       
        </div>
          <!--begin::Actions-->
     <div class="card-footer d-flex justify-content-end py-6 px-9">
        <button type="reset" class="btn btn-light btn-active-light-primary me-2" disabled>FORM STATUS</button>
        <button type="submit" class="btn btn-success" id="kt_account_profile_details_submit" disabled>Signed</button>
    </div>
    <!--end::Actions-->
        <!--end::Card title-->
        </div>
        <!--begin::Card header-->
        <!--begin::Notice-->
        <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
            <!--begin::Icon-->
            <i class="ki-duotone ki-design-1 fs-2tx text-primary me-4"></i>        <!--end::Icon-->
            
            <!--begin::Wrapper-->
            <div class="d-flex flex-stack flex-grow-1 ">
                            <!--begin::Content-->
                    <div class=" fw-semibold">
                    <div class="fs-6 text-gray-1000 ">ANNUAL PERFORMANCE EVALUATION REPORT  [ From 12-2-2023 To 12-3-2024]</div>
                    <div class="fs-6 text-gray-900 ">Full Name: Mr Ken Wood   </div>
                    <div class="fs-6 text-gray-900 ">Dept: ICT Department </div>
                   
                    <!--end::Content-->
                    
                    </div>
                    <!--end::Wrapper-->  
        </div>
           
        </div>
         <!--end::Notice-->
        <!--begin::Content-->
        <div id="kt_account_settings_profile_details" class="collapse show">
        
        <!--begin::Form-->
        <form id="kt_account_profile_details_form" class="form">
            
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
                    <div class="fs-6 text-gray-700 ">Comments of the Head of Department</div>
                    </div>
                    <!--end::Content-->
                    
             </div>
                    <!--end::Wrapper-->  
        </div>
            <!--end::Notice-->
        
        
        <!--begin::Input group-->
        <div class="row mb-6">
            <!--begin::Label-->
            <label class="col-lg-4 col-form-label required  fw-semibold fs-6">
                Do you and the person reported upon agree on the job description and the order of importance
                 (if not, please discuss the changes with him and record any unresolved difference here) YES/NO
            </label>
            <!--end::Label-->
        
             <!--begin::Col-->
             <div class="col-lg-8 fv-row">
                <textarea name="teachingexperience" class="form-control form-control-lg form-control-solid" 
                placeholder="" required></textarea>
            </div>
            <!--end::Col-->
           
        </div>
        <!--end::Input group-->
        
        
        <!--begin::Input group-->
        <div class="row mb-6">
            <!--begin::Label-->
            <label class="col-lg-4 col-form-label required  fw-semibold fs-6">
                
                Assessment of Performance:
                How effective is he/she in the performance of the duties out.
                What is needed here is an indication, for each of the duties ,
                how far he/she has achieved the required results?
                   
            </label>
            <!--end::Label-->
        
             <!--begin::Col-->
             <div class="col-lg-8 fv-row">
                <textarea name="coursestaught" class="form-control form-control-lg form-control-solid" 
                placeholder="" required></textarea>
            </div>
            <!--end::Col-->
          
        </div>
        <!--end::Input group-->
        
        <!--begin::Input group-->
        <div class="row mb-6">
            <!--begin::Label-->
            <label class="col-lg-12 col-form-label required  fw-semibold fs-6">
    Aspects of performance: Administrative/ professional duties
	     In assessing performance, you have already considered some or all of the following aspects:
          would you now comment on and assess the aspects separately? 
          Each aspect is described in terms of outstanding (A) and unsatisfactory Performance (E). 
          The three intermediate ratings (B), (C) and (D) represents behaviour between these extremes. 
           Rating ‘A’ or ‘E’ should be given if you believe it is a generally true statement that 
           could be supported, if necessary, by specific occurrences. 
           If you feel any aspect of performance not in the list calls 
           for special comment, please mention it at the end.

            </label>
            <!--end::Label-->

          
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
                        <div class="fs-6 text-gray-700 ">1.	Contribution to the Polytechnic and Nation – 25 points</div>
                        </div>
                        <!--end::Content-->
                        
                 </div>
                        <!--end::Wrapper-->  
            </div>
                <!--end::Notice-->
            
        
        
        
        <!--begin::Notice-->
        <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
            <!--begin::Icon-->
            <i class="ki-duotone ki-design-1 fs-2tx text-primary me-4"></i>        <!--end::Icon-->
            
            <!--begin::Wrapper-->
            <div class="d-flex flex-stack flex-grow-1 ">
                            <!--begin::Content-->
                    <div class=" fw-semibold">
                    <div class="fs-6 text-gray-700 ">CONTRIBUTION TO DEPARTMENT/UNIT/ SCHOOL/ POLYTECHNIC</div>
                    </div>
                    <!--end::Content-->
                    
             </div>
                    <!--end::Wrapper-->  
        </div>
            <!--end::Notice-->
        
        <!--begin::Input group-->
        <div class="row mb-6">
            <!--begin::Label-->
            <label class="col-lg-4 col-form-label required fw-semibold fs-6">1.	Discharging of Department/Unit Assignment </label>
            <!--end::Label-->
        
            <!--begin::Col-->
            <div class="col-lg-8">
                <!--begin::Row-->
                <div class="row">
                    <!--begin::Col-->
                    <div class="col-lg-6 fv-row">
                        <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                        <h5>2.5</h5>
                        
                    </div>
                    <!--end::Col-->
        
                    <!--begin::Col-->
                    <div class="col-lg-6 fv-row">
                        <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                        <input type="text" name="qualifiactionscore" class="form-control form-control-lg form-control-solid" 
                       placeholder="Score"  required />
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
            <label class="col-lg-4 col-form-label required fw-semibold fs-6">2.	Discharge of School/Section Assignment</label>
            <!--end::Label-->
        
            <!--begin::Col-->
            <div class="col-lg-8">
                <!--begin::Row-->
                <div class="row">
                    <!--begin::Col-->
                    <div class="col-lg-6 fv-row">
                        <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                        <h5>2.5</h5>
                        
                    </div>
                    <!--end::Col-->
        
                    <!--begin::Col-->
                    <div class="col-lg-6 fv-row">
                        <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                        <input type="text" name="researchscore" class="form-control form-control-lg form-control-solid" 
                       placeholder="Score"  required />
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
            <label class="col-lg-4 col-form-label required fw-semibold fs-6">3.	Discharge of Polytechnic Assignment </label>
            <!--end::Label-->
        
            <!--begin::Col-->
            <div class="col-lg-8">
                <!--begin::Row-->
                <div class="row">
                    <!--begin::Col-->
                    <div class="col-lg-6 fv-row">
                        <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                        <h5>5.0</h5>
                        
                    </div>
                    <!--end::Col-->
        
                    <!--begin::Col-->
                    <div class="col-lg-6 fv-row">
                        <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                        <input type="text" name="researchscore" class="form-control form-control-lg form-control-solid" 
                       placeholder="Score"  required />
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
            <label class="col-lg-4 col-form-label required fw-semibold fs-6">4.	Moral conduct and comportment </label>
            <!--end::Label-->
        
            <!--begin::Col-->
            <div class="col-lg-8">
                <!--begin::Row-->
                <div class="row">
                    <!--begin::Col-->
                    <div class="col-lg-6 fv-row">
                        <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                        <h5>5.0</h5>
                        
                    </div>
                    <!--end::Col-->
        
                    <!--begin::Col-->
                    <div class="col-lg-6 fv-row">
                        <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                        <input type="number" name="teachingscore" class="form-control form-control-lg form-control-solid" 
                       placeholder="Score"  required />
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
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Sub Total </label>
                    <!--end::Label-->
                
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                                <h5>25</h5>
                                
                            </div>
                            <!--end::Col-->
                
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                                <input type="number" name="teachingscore" class="form-control form-control-lg form-control-solid" 
                               placeholder="Score"  required  />
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
                    <div class="fs-6 text-gray-700 ">
                        CONTRIBUTION TO COMMUNITY/STATE/ NATION
                    </div>
                    </div>
                    <!--end::Content-->
                    
             </div>
                    <!--end::Wrapper-->  
        </div>
            <!--end::Notice-->


        
        <!--begin::Input group-->
        <div class="row mb-6">
            <!--begin::Label-->
            <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                1.	Contribution to Community
            </label>
            <!--end::Label-->
        
            <!--begin::Col-->
            <div class="col-lg-8">
                <!--begin::Row-->
                <div class="row">
                    <!--begin::Col-->
                    <div class="col-lg-6 fv-row">
                        <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                        <h5>5</h5>
                        
                    </div>
                    <!--end::Col-->
        
                    <!--begin::Col-->
                    <div class="col-lg-6 fv-row">
                        <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                        <input type="text" name="lenghtservice" class="form-control form-control-lg form-control-solid" 
                       placeholder="Score"  required />
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
            <label class="col-lg-4 col-form-label required fw-semibold fs-6">2.	Contribution to State</label>
            <!--end::Label-->
        
            <!--begin::Col-->
            <div class="col-lg-8">
                <!--begin::Row-->
                <div class="row">
                    <!--begin::Col-->
                    <div class="col-lg-6 fv-row">
                        <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                        <h5>2.5</h5>
                        
                    </div>
                    <!--end::Col-->
        
                    <!--begin::Col-->
                    <div class="col-lg-6 fv-row">
                        <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                        <input type="number" name="contributionscore" class="form-control form-control-lg form-control-solid" 
                       placeholder="Score"  required />
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
            <label class="col-lg-4 col-form-label required fw-semibold fs-6">3.	Contribution to Nation</label>
            <!--end::Label-->
        
            <!--begin::Col-->
            <div class="col-lg-8">
                <!--begin::Row-->
                <div class="row">
                    <!--begin::Col-->
                    <div class="col-lg-6 fv-row">
                        <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                        <h5>2.5</h5>
                        
                    </div>
                    <!--end::Col-->
        
                    <!--begin::Col-->
                    <div class="col-lg-6 fv-row">
                        <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                        <input type="number" name="contributionscore" class="form-control form-control-lg form-control-solid" 
                       placeholder="Score"  required />
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
                <label class="col-lg-4 col-form-label required fw-semibold fs-6 text-gray-900">Sub Total</label>
                <!--end::Label-->
            
                <!--begin::Col-->
                <div class="col-lg-8">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-6 fv-row">
                            <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                            <h5>10</h5>
                            
                        </div>
                        <!--end::Col-->
            
                        <!--begin::Col-->
                        <div class="col-lg-6 fv-row">
                            <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                            <input type="number" name="contributionscore" class="form-control form-control-lg form-control-solid" 
                           placeholder="Score"  required />
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
            <div class="fs-6 text-gray-700 ">
                GENERAL SCORING RECOMMEDED FOR THE ABOVE IS AS FOLLOWS
            </div>
            </div>
            <!--end::Content-->
            
     </div>
            <!--end::Wrapper-->  
</div>
    <!--end::Notice-->


             <!--begin::Input group-->
             <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label required fw-semibold fs-6">1.	Departmental/Unit/school/polytechnic Level</label>
                <!--end::Label-->
            
                <!--begin::Col-->
                <div class="col-lg-8">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-6 fv-row">
                            <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                            <h5>15</h5>
                            
                        </div>
                        <!--end::Col-->
            
                        <!--begin::Col-->
                        <div class="col-lg-6 fv-row">
                            <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                            <input type="number" name="contributionscore" class="form-control form-control-lg form-control-solid" 
                           placeholder="Score"  required />
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
                <label class="col-lg-4 col-form-label required fw-semibold fs-6">2.	Community/state/National Level</label>
                <!--end::Label-->
            
                <!--begin::Col-->
                <div class="col-lg-8">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-6 fv-row">
                            <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                            <h5>10</h5>
                            
                        </div>
                        <!--end::Col-->
            
                        <!--begin::Col-->
                        <div class="col-lg-6 fv-row">
                            <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                            <input type="number" name="contributionscore" class="form-control form-control-lg form-control-solid" 
                           placeholder="Score"  required />
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
                <label class="col-lg-4 col-form-label required fw-semibold fs-6 text-gray-900">Grand Total</label>
                <!--end::Label-->
            
                <!--begin::Col-->
                <div class="col-lg-8">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-6 fv-row">
                            <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                            <h5>25</h5>
                            
                        </div>
                        <!--end::Col-->
            
                        <!--begin::Col-->
                        <div class="col-lg-6 fv-row">
                            <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                            <input type="number" name="contributionscore" class="form-control form-control-lg form-control-solid" 
                           placeholder="Score"  required />
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
            <div class="fs-6 text-gray-1000 ">
                2.	Annual Appraisal Evaluation Report – 75 points
            </div>
            </div>
            <!--end::Content-->
            
     </div>
            <!--end::Wrapper-->  
</div>
    <!--end::Notice-->


    <!--begin::Notice-->
   <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
    <!--begin::Icon-->
    <i class="ki-duotone ki-design-1 fs-2tx text-primary me-4"></i>        <!--end::Icon-->
    
    <!--begin::Wrapper-->
    <div class="d-flex flex-stack flex-grow-1 ">
                    <!--begin::Content-->
            <div class=" fw-semibold">
            <div class="fs-6 text-gray-900 ">
                FORESIGHT
            </div>
            </div>
            <!--end::Content-->
            
     </div>
            <!--end::Wrapper-->  
</div>
    <!--end::Notice-->



    
               <!--begin::Input group-->
               <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label required fw-semibold fs-6">1.	Ability to imagine what is likely to happen and consider this when planning for the future.</label>
                <!--end::Label-->
            
                <!--begin::Col-->
                <div class="col-lg-8">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-6 fv-row">
                            <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                            <h5>2.0</h5>
                            
                        </div>
                        <!--end::Col-->
            
                        <!--begin::Col-->
                        <div class="col-lg-6 fv-row">
                            <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                            <input type="number" name="contributionscore" class="form-control form-control-lg form-control-solid" 
                           placeholder="Score"  required />
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
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">2.	Anticipates problems and develops solutions in advance</label>
                    <!--end::Label-->
                
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                                <h5>3.0</h5>
                                
                            </div>
                            <!--end::Col-->
                
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                                <input type="number" name="contributionscore" class="form-control form-control-lg form-control-solid" 
                               placeholder="Score"  required />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                     <!--begin::Input group-->
               <div class="row mb-6 text-gray-1000">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label required fw-semibold fs-6 ">Sub total</label>
                <!--end::Label-->
            
                <!--begin::Col-->
                <div class="col-lg-8">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-6 fv-row">
                            <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                            <h5>5.0</h5>
                            
                        </div>
                        <!--end::Col-->
            
                        <!--begin::Col-->
                        <div class="col-lg-6 fv-row">
                            <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                            <input type="number" name="contributionscore" class="form-control form-control-lg form-control-solid" 
                           placeholder="Score"  required />
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
            <div class="fs-6 text-gray-900 ">
                INITIATIVE
            </div>
            </div>
            <!--end::Content-->
            
     </div>
            <!--end::Wrapper-->  
</div>
    <!--end::Notice-->



    
               <!--begin::Input group-->
               <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                    1.	Ability to make decisions and take actions without waiting for someone to tell him/her what to do
                </label>
                <!--end::Label-->
            
                <!--begin::Col-->
                <div class="col-lg-8">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-6 fv-row">
                            <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                            <h5>2.0</h5>
                            
                        </div>
                        <!--end::Col-->
            
                        <!--begin::Col-->
                        <div class="col-lg-6 fv-row">
                            <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                            <input type="number" name="contributionscore" class="form-control form-control-lg form-control-solid" 
                           placeholder="Score"  required />
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
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">2.	Always acts on own initiative </label>
                    <!--end::Label-->
                
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                                <h5>3.0</h5>
                                
                            </div>
                            <!--end::Col-->
                
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                                <input type="number" name="contributionscore" class="form-control form-control-lg form-control-solid" 
                               placeholder="Score"  required />
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
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Sub Total</label>
                    <!--end::Label-->
                
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                                <h5>5.0</h5>
                                
                            </div>
                            <!--end::Col-->
                
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                                <input type="number" name="contributionscore" class="form-control form-control-lg form-control-solid" 
                               placeholder="Score"  required />
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
            <div class="fs-6 text-gray-900 ">
               SELF DISCIPLINE
            </div>
            </div>
            <!--end::Content-->
            
     </div>
            <!--end::Wrapper-->  
</div>
    <!--end::Notice-->



    
               <!--begin::Input group-->
               <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                    1.	Ability to make one self to do the things one ought to do without someone making him to do it
                </label>
                <!--end::Label-->
            
                <!--begin::Col-->
                <div class="col-lg-8">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-6 fv-row">
                            <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                            <h5>3.0</h5>
                            
                        </div>
                        <!--end::Col-->
            
                        <!--begin::Col-->
                        <div class="col-lg-6 fv-row">
                            <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                            <input type="number" name="contributionscore" class="form-control form-control-lg form-control-solid" 
                           placeholder="Score"  required />
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
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">2.	Has well balanced attitude towards work and leisure </label>
                    <!--end::Label-->
                
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                                <h5>3.0</h5>
                                
                            </div>
                            <!--end::Col-->
                
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                                <input type="number" name="contributionscore" class="form-control form-control-lg form-control-solid" 
                               placeholder="Score"  required />
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
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Sub Total</label>
                    <!--end::Label-->
                
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                                <h5>5.0</h5>
                                
                            </div>
                            <!--end::Col-->
                
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                                <input type="number" name="contributionscore" class="form-control form-control-lg form-control-solid" 
                               placeholder="Score"  required />
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
            <div class="fs-6 text-gray-900 ">
                COMMAND OF LANGUAGE
            </div>
            </div>
            <!--end::Content-->
            
     </div>
            <!--end::Wrapper-->  
</div>
    <!--end::Notice-->



    
               <!--begin::Input group-->
               <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                    1.	Ability to speak English language clearly
                </label>
                <!--end::Label-->
            
                <!--begin::Col-->
                <div class="col-lg-8">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-6 fv-row">
                            <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                            <h5>1.0</h5>
                            
                        </div>
                        <!--end::Col-->
            
                        <!--begin::Col-->
                        <div class="col-lg-6 fv-row">
                            <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                            <input type="number" name="contributionscore" class="form-control form-control-lg form-control-solid" 
                           placeholder="Score"  required />
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
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">2.	Ability to write cogently and concisely 
                        (reasonably and correctly) 
                         </label>
                    <!--end::Label-->
                
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                                <h5>2.0</h5>
                                
                            </div>
                            <!--end::Col-->
                
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                                <input type="number" name="contributionscore" class="form-control form-control-lg form-control-solid" 
                               placeholder="Score"  required />
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
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                        3.	Puts his points across genuinely
                         </label>
                    <!--end::Label-->
                
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                                <h5>2.0</h5>
                                
                            </div>
                            <!--end::Col-->
                
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                                <input type="number" name="contributionscore" class="form-control form-control-lg form-control-solid" 
                               placeholder="Score"  required />
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
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Sub Total</label>
                    <!--end::Label-->
                
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                                <h5>5.0</h5>
                                
                            </div>
                            <!--end::Col-->
                
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                                <input type="number" name="contributionscore" class="form-control form-control-lg form-control-solid" 
                               placeholder="Score"  required />
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
            <div class="fs-6 text-gray-900 ">
                HUMAN RELATION
            </div>
            </div>
            <!--end::Content-->
            
     </div>
            <!--end::Wrapper-->  
</div>
    <!--end::Notice-->



    
               <!--begin::Input group-->
               <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                    1.	Sensitivity to the feelings of others
                </label>
                <!--end::Label-->
            
                <!--begin::Col-->
                <div class="col-lg-8">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-6 fv-row">
                            <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                            <h5>1.0</h5>
                            
                        </div>
                        <!--end::Col-->
            
                        <!--begin::Col-->
                        <div class="col-lg-6 fv-row">
                            <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                            <input type="number" name="contributionscore" class="form-control form-control-lg form-control-solid" 
                           placeholder="Score"  required />
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
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                        2.	Tactfulness (Ability to deal with people in a 
                        sensitive manner
                            
                    </label>
                    <!--end::Label-->
                
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                                <h5>1.0</h5>
                                
                            </div>
                            <!--end::Col-->
                
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                                <input type="number" name="contributionscore" class="form-control form-control-lg form-control-solid" 
                               placeholder="Score"  required />
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
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                        3.	Understanding of other people’s ) personal problems
                    </label>
                    <!--end::Label-->
                
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                                <h5>1.0</h5>
                                
                            </div>
                            <!--end::Col-->
                
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                                <input type="number" name="contributionscore" class="form-control form-control-lg form-control-solid" 
                               placeholder="Score"  required />
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
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                        4.	Respect to and from others 
                            
                    </label>
                    <!--end::Label-->
                
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                                <h5>1.0</h5>
                                
                            </div>
                            <!--end::Col-->
                
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                                <input type="number" name="contributionscore" class="form-control form-control-lg form-control-solid" 
                               placeholder="Score"  required />
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
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                        5.	Effectiveness in dealing with people of all types
                            
                    </label>
                    <!--end::Label-->
                
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                                <h5>1.0</h5>
                                
                            </div>
                            <!--end::Col-->
                
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                                <input type="number" name="contributionscore" class="form-control form-control-lg form-control-solid" 
                               placeholder="Score"  required />
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
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Sub Total</label>
                    <!--end::Label-->
                
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                                <h5>5.0</h5>
                                
                            </div>
                            <!--end::Col-->
                
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                                <input type="number" name="contributionscore" class="form-control form-control-lg form-control-solid" 
                               placeholder="Score"  required />
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
            <div class="fs-6 text-gray-900 ">
                SENSE OF RESPONSIBILITY
            </div>
            </div>
            <!--end::Content-->
            
     </div>
            <!--end::Wrapper-->  
</div>
    <!--end::Notice-->



    
               <!--begin::Input group-->
               <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                    1.	Seeks out responsibility
                </label>
                <!--end::Label-->
            
                <!--begin::Col-->
                <div class="col-lg-8">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-6 fv-row">
                            <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                            <h5>2.0</h5>
                            
                        </div>
                        <!--end::Col-->
            
                        <!--begin::Col-->
                        <div class="col-lg-6 fv-row">
                            <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                            <input type="number" name="contributionscore" class="form-control form-control-lg form-control-solid" 
                           placeholder="Score"  required />
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
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">2.	Accept responsibility</label>
                    <!--end::Label-->
                
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                                <h5>3.0</h5>
                                
                            </div>
                            <!--end::Col-->
                
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                                <input type="number" name="contributionscore" class="form-control form-control-lg form-control-solid" 
                               placeholder="Score"  required />
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
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Sub Total</label>
                    <!--end::Label-->
                
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                                <h5>5.0</h5>
                                
                            </div>
                            <!--end::Col-->
                
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                                <input type="number" name="contributionscore" class="form-control form-control-lg form-control-solid" 
                               placeholder="Score"  required />
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
            <div class="fs-6 text-gray-900 ">
                RELIABILITY UNDER PRESSURE
            </div>
            </div>
            <!--end::Content-->
            
     </div>
            <!--end::Wrapper-->  
</div>
    <!--end::Notice-->



    
               <!--begin::Input group-->
               <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                    1.	Ability to work under pressure
                </label>
                <!--end::Label-->
            
                <!--begin::Col-->
                <div class="col-lg-8">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-6 fv-row">
                            <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                            <h5>2.0</h5>
                            
                        </div>
                        <!--end::Col-->
            
                        <!--begin::Col-->
                        <div class="col-lg-6 fv-row">
                            <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                            <input type="number" name="contributionscore" class="form-control form-control-lg form-control-solid" 
                           placeholder="Score"  required />
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
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                        2.	Quality of performance under pressure    
                    </label>
                    <!--end::Label-->
                
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                                <h5>3.0</h5>
                                
                            </div>
                            <!--end::Col-->
                
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                                <input type="number" name="contributionscore" class="form-control form-control-lg form-control-solid" 
                               placeholder="Score"  required />
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
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Sub Total</label>
                    <!--end::Label-->
                
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                                <h5>5.0</h5>
                                
                            </div>
                            <!--end::Col-->
                
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="fs-6 text-gray-900 "><h4>Actual Score</h4></div> 
                                <input type="number" name="contributionscore" class="form-control form-control-lg form-control-solid" 
                               placeholder="Score"  required />
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
                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Relationship with staff and student</label>
                <!--end::Label-->
        
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <input type="text" name="relationship" class="form-control form-control-lg form-control-solid" 
                    placeholder="Relationship with staff and student" required/>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
             
             <!--begin::Input group-->
             <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Punctuality and Appearance</label>
                <!--end::Label-->
        
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <input type="text" name="punctuality" class="form-control form-control-lg form-control-solid" 
                    placeholder="Punctuality and Appearance" required/>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
        
           
        
        
        
            <!--begin::Input group-->
            <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label fw-semibold fs-6">General Remarks by Head of Department</label>
                <!--end::Label-->
        
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <input type="text" name="remarks" class="form-control form-control-lg form-control-solid" 
                    placeholder="General Remarks by Head of Department" required />
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
        
            <!--begin::Input group-->
            <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label required fw-semibold fs-6">The officer has served under me from</label>
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
            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Signature of Head of Department and Date</label>
            <!--end::Label-->
        
            <!--begin::Col-->
            <div class="col-lg-8">
                <!--begin::Row-->
                <div class="row">
                   
                    <!--begin::Col-->
                    <div class="col-lg-6 fv-row">
                    Date: <input type="date" name="pqualification3" class="form-control form-control-lg form-control-solid" 
                       placeholder="Professional qualification"  required />
                    </div>
                    <!--end::Col-->
                     <!--begin::Col-->
                     <div class="col-lg-6 fv-row">
                        Signature: <input type="file" name="signature" class="form-control form-control-lg form-control-solid" 
                        placeholder="awarding Body"  required />
                     </div>
                     <!--end::Col-->
                     
                </div>
                <!--end::Row-->
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
        
        
          </div>
        <!--end::Content container-->
    

   	
@endsection   