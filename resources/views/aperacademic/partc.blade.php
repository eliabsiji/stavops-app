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
    <h3 class="fw-bold m-0">PART C (To be completed the Staff)</h3>
    </div>
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
                <div class="fs-6 text-gray-700 ">Comments of staff</div>
                </div>
                <!--end::Content-->
                
         </div>
                <!--end::Wrapper-->  
    </div>
        <!--end::Notice-->
    
    
    <!--begin::Input group-->
    <div class="row mb-6">
        <!--begin::Label-->
        <label class="col-lg-4 col-form-label required  fw-semibold fs-6">Comments of staff Report on (if any):</label>
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
        <label class="col-lg-4 col-form-label required  fw-semibold fs-6">Assessment of Research</label>
        <!--end::Label-->
    
         <!--begin::Col-->
         <div class="col-lg-8 fv-row">
            <textarea name="coursestaught" class="form-control form-control-lg form-control-solid" 
            placeholder="Courses taught within the Current Academic Session" required></textarea>
        </div>
        <!--end::Col-->
      
    </div>
    <!--end::Input group-->
    
    <!--begin::Input group-->
    <div class="row mb-6">
        <!--begin::Label-->
        <label class="col-lg-4 col-form-label required  fw-semibold fs-6">Assessment of Publication</label>
        <!--end::Label-->
    
         <!--begin::Col-->
         <div class="col-lg-8 fv-row">
            <textarea name="supervision" class="form-control form-control-lg form-control-solid" 
            placeholder="Supervision" required></textarea>
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
                <div class="fs-6 text-gray-700 ">Quantitative Evaluation</div>
                </div>
                <!--end::Content-->
                
         </div>
                <!--end::Wrapper-->  
    </div>
        <!--end::Notice-->
    
    <!--begin::Input group-->
    <div class="row mb-6">
        <!--begin::Label-->
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Qualification </label>
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
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Research and Publication </label>
        <!--end::Label-->
    
        <!--begin::Col-->
        <div class="col-lg-8">
            <!--begin::Row-->
            <div class="row">
                <!--begin::Col-->
                <div class="col-lg-6 fv-row">
                    <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                    <h5>50</h5>
                    
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
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Research and Publication </label>
        <!--end::Label-->
    
        <!--begin::Col-->
        <div class="col-lg-8">
            <!--begin::Row-->
            <div class="row">
                <!--begin::Col-->
                <div class="col-lg-6 fv-row">
                    <div class="fs-6 text-gray-900 "><h4>Maximum Score</h4></div> 
                    <h5>50</h5>
                    
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
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Teaching/ professional duty </label>
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
                    <input type="text" name="teachingscore" class="form-control form-control-lg form-control-solid" 
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
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Length of service (since last promotion/appointment) </label>
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
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Contribution to the polytechnic and the nation</label>
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
                    <input type="text" name="contributionscore" class="form-control form-control-lg form-control-solid" 
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
            

    
    <!--begin::Notice-->
    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
        <!--begin::Icon-->
        <i class="ki-duotone ki-design-1 fs-2tx text-primary me-4"></i>        <!--end::Icon-->
        
        <!--begin::Wrapper-->
        <div class="d-flex flex-stack flex-grow-1 ">
                        <!--begin::Content-->
                <div class=" fw-semibold">
                <div class="fs-6 text-gray-700 ">Date and Signature  </div>
                <div class="fs-6 text-gray-900 ">Upload a snapshot of your Signature  </div>
               
                <!--end::Content-->
                
                </div>
                <!--end::Wrapper-->  
    </div>
       
    </div>
     <!--end::Notice-->
    
    
    <!--begin::Input group-->
    <div class="row mb-6">
        <!--begin::Label-->
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Signature of member of Staff and Date</label>
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


</div>
<!--end::Content-->	


 </div>
<!--end::Content container-->

   	
@endsection   