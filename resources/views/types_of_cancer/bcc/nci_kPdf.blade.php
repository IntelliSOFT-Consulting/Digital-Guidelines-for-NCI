@extends('layouts.simple')

@section('body')
<style>
  .definition{
    position: relative;
    left: 25%;
    right: 25%;
  }
  h2{
    font-size: 12px;
    text-decoration: none;

  }
  table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
.page-break {
  page-break-after: always;
}
.flex-header {
  display: flex;
    margin-bottom: -5px;
    padding-left: 40px;
    padding-right: 40px;
    
}
.flex-headerr {
    display: flex;
    
    padding-left: 40px;
    padding-right: 40px;
    
}
.line {
  display: flex;
    flex-grow: 1;
    height: 1px;
    align-self: center;
    margin: 0 100px;
    background-color: grey;
}
.row {
    margin-right: -49px;
    margin-left: -49;
}
.apply {
    /* border: 3rem solid white; */
    background-color: white;
    /* margin: 50px;
    margin-top: 30px; */
}
.content-wrap.card {
    /* padding: 16px 24px; */
    min-height: auto;
}
.card {
    background-color: #FFF;
    /* box-shadow: 0 1px 6px -1px rgb(0 0 0 / 10%); */
    
}
form{
    margin-right: 20px;
    margin-left: 20px;
}
</style>
</head>
<div style="margin:5px">
          <div class="container small" style="max-width: 100%;">
    <main class="content-wrap card" style="min-height: auto;">
    @include('common/nci_search')

           
        </main>

        <main class="content-wrap card" style="min-height: auto;">
        <form method = "POST" action = "{{url('/apply/to/cancer/center')}}" accept-charset="utf-8" enctype="multipart/form-data">

                        @csrf
<table>
<table style="width:90%; margin-left:5%;margin-bottom:-9px" >
    <tr>
    <th>
        <h5 style="text-align:center;font-size: 12px">THE NATIONAL CANCER INSTITUTE OF KENYA CANCER MANAGEMENT CENTER CERTIFICATION APPLICATION FORM</h5>
    </th>
    </tr>
</table>
<table>
    <tr style="background-color: #ffcc99">
        <th>Applicants details</th>
        <th style="width:35%"></th>
        <th style="width:20%"></th>
    </tr>
    <tr style="background-color:  #009900">
        <th></th>
        <th style="width:35%"></th>
        <th style="width:20%"></th>
    </tr>
</table>
<table >
    <tr>
    <th>
        <p>Please type or print in capital letters</p>
    </tr>
    </th>
</table>
<table>
    <tr>
        <th>Cancer Management Center name</th>
        <th style="width:55%" ><input style="width:100%;background: #FBF4F4;" class="form-control" type="text" name="center"/></th>
    </tr>
    <tr>
        <th>Physical address</th>
        <th ><input style="width:100%;background: #FBF4F4;" class="form-control" type="text" name="paddress"/></th>
    </tr>
    <tr>
        <th>Mailing address</th>
        <th style="width:55%"><input style="width:100%;background: #FBF4F4;" class="form-control" type="email" name="email"/></th>
    </tr>
</table>
<table>
    <tr>
        <th>Service Center type (Tick as appropriate)</th>
        <th style="width:35%">Basic Cancer Treatment Center</th>
        <th style="width:20%"><input type="radio" id="basic" name="service_c" value="basic"></th>
    </tr>
    <tr>
        <th></th>
        <th style="width:35%">Comprehensive Cancer Center</th>
        <th style="width:20%"><input type="radio" id="comprensive" name="service_c" value="comprensive"></th>
    </tr>
</table>
<table>
    <tr style="background-color: #ffcc99; height:40px">
        <th></th>
        <th style="width:55%" ></th>
    </tr>
</table>
<table>
    <tr>
        <th>Hospital/Institute head Name</th>
        <th style="width:55%"><input style="width:100%;background: #FBF4F4;" class="form-control" type="email" name="institute_name"/></th>
    </tr>
    <tr>
        <th>Mailing address</th>
        <th style="width:55%"><input style="width:100%;background: #FBF4F4;" class="form-control" type="email" name="head_email"/></th>
    </tr>
</table>
<table>
    <tr>
        <th>Contacts</th>
        <th style="width:35%">Tel.<input style="width:100%;background: #FBF4F4;" class="form-control" type="email" name="con_email"/></th>
        <th style="width:20%">E-mail<input style="width:100%;background: #FBF4F4;" class="form-control" type="email" name="inst_email"/></th>
    </tr>
</table>
<table>
    <tr style="background-color: #ffcc99; height:40px">
        <th></th>
        <th style="width:55%" ></th>
    </tr>
</table>
<table>
    <tr>
        <th>Department head/Cancer Center Manager Name</th>
        <th style="width:55%" ><input style="width:100%;background: #FBF4F4;" class="form-control" type="email" name="manager_name"/></th>
    </tr>
    <tr>
        <th>Mailing address</th>
        <th style="width:55%"><input style="width:100%;background: #FBF4F4;" class="form-control" type="email" name="depart_email"/></th>
    </tr>
</table>
<table>
  <!-- style="margin-bottom:230px" -->
    <tr>
        <th>Contacts</th>
        <th style="width:35%">Tel.<input style="width:100%;background: #FBF4F4;" class="form-control" type="email" name="department_phone"/></th>
        <th style="width:20%"><p>E-mail</p><input style="width:100%;background: #FBF4F4;" class="form-control" type="email" name="depart1_email"/></th>
    </tr>
</table >
<table style="margin-bottom:-9px" >
<th>
<h5 style="text-align:center;font-size: 16px">Please indicate compliance with each of the 13 items</h5>
</th>
</table>


<table>
    <tr style="background-color: #ffcc99; height:40px">
        <th style="width:5%"></th>
        <th style="width:50%">Item</th>
        <th style="width:10%">Yes</th>
        <th style="width:15%">No</th>
        <th style="width:15%">N/A</th>
    </tr>
      <tr>
      <td></td>
      <td>Does your cancer centre or oncology department
provide the following services:</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td>a. Cancer prevention e.g. HPV, Hep B vaccination
</td>
      <td><input type="radio" id="comprensive" name="prevention" value="Yes"></td>
      <td><input type="radio" id="comprensive" name="prevention" value="No"></td>
      <td><input type="radio" id="comprensive" name="prevention" value="N/A"></td>
      </tr>
      <tr>
      <td></td>
      <td>b. Cancer screening, early detection and treatment of pre-cancerous lesions</td>
      <td><input type="radio" id="comprensive" name="pre_cancerous" value="Yes"></td>
      <td><input type="radio" id="comprensive" name="pre_cancerous" value="No"></td>
      <td><input type="radio" id="comprensive" name="pre_cancerous" value="N/A"></td>
      </tr>
      <tr>
      <td></td>
      <td>c. Inpatient wards</td>
      <td><input type="radio" id="comprensive" name="inpatient_wards" value="Yes"></td>
      <td><input type="radio" id="comprensive" name="inpatient_wards" value="No"></td>
      <td><input type="radio" id="comprensive" name="inpatient_wards" value="N/A"></td>
      </tr>
      <tr>
      <td></td>
      <td>d. Ambulatory/outpatient</td>
      <td><input type="radio" id="comprensive" name="outpatient" value="Yes"></td>
      <td><input type="radio" id="comprensive" name="outpatient" value="No"></td>
      <td><input type="radio" id="comprensive" name="outpatient" value="N/A"></td>
      </tr>
      <tr>
      <td></td>
      <td>e. Basic diagnostic laboratory & pathology</td>
      <td><input type="radio" id="comprensive" name="pathology" value="Yes"></td>
      <td><input type="radio" id="comprensive" name="pathology" value="No"></td>
      <td><input type="radio" id="comprensive" name="pathology" value="N/A"></td>
      </tr>
      <tr>
      <td></td>
      <td>f. Basic diagnostic radiology</td>
      <td><input type="radio" id="comprensive" name="radiology" value="Yes"></td>
      <td><input type="radio" id="comprensive" name="radiology" value="No"></td>
      <td><input type="radio" id="comprensive" name="radiology" value="N/A"></td>
      </tr>
      <tr>
      <td></td>
      <td>g. Surgical capacity for diagnosis and treatment</td>
      <td><input type="radio" id="comprensive" name="surgical" value="Yes"></td>
      <td><input type="radio" id="comprensive" name="surgical" value="No"></td>
      <td><input type="radio" id="comprensive" name="surgical" value="N/A"></td>
      </tr>
      <tr style="margin-left:2px">
      <td ></td>
      <td>h. Radiotherapy</td>
      <td><input type="radio" id="comprensive" name="radiotherapy" value="Yes"></td>
      <td><input type="radio" id="comprensive" name="radiotherapy" value="No"></td>
      <td><input type="radio" id="comprensive" name="radiotherapy" value="N/A"></td>
      </tr>
      <tr>
      <td></td>
      <td>i. Medical oncology services</td>
      <td><input type="radio" id="oncology1" name="oncology" onclick="display()" value="Yes"></td>
      <td><input type="radio" id="oncology2" name="oncology" onclick="display()" value="No"></td>
      <td><input type="radio" id="oncology3" name="oncology" onclick="display()"value="N/A"></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">-Chemotherapy</td>
      <td><input type="radio" id="chemotherapy" name="chemotherapy"  value="Yes"></td>
      <td><input type="radio" id="chemotherapy1" name="chemotherapy"  value="No"></td>
      <td><input type="radio" id="chemotherapy2" name="chemotherapy"  value="N/A"></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- Targeted therapy</td>
      <td><input type="radio" id="therapy" name="therapy" value="Yes"></td>
      <td><input type="radio" id="therapy1" name="therapy" value="No"></td>
      <td><input type="radio" id="therapy2" name="therapy" value="N/A"></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- Hormonal therapy</td>
      <td><input type="radio" id="hormonal" name="hormonal" value="Yes"></td>
      <td><input type="radio" id="hormonal1" name="hormonal" value="No"></td>
      <td><input type="radio" id="hormonal2" name="hormonal" value="N/A"></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- Immunotherapy</td>
      <td><input type="radio" id="immunotherapy" name="immunotherapy" value="Yes"></td>
      <td><input type="radio" id="immunotherapy1" name="immunotherapy" value="No"></td>
      <td><input type="radio" id="immunotherapy2" name="immunotherapy" value="N/A"></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- Bone marrow transplants</td>
      <td><input type="radio" id="transplants" name="transplants" value="Yes"></td>
      <td><input type="radio" id="transplants1" name="transplants" value="No"></td>
      <td><input type="radio" id="transplants2" name="transplants" value="N/A"></td>
      </tr>
      <tr>
      <td></td>
      <td>j. Palliative care</td>
      <td><input type="radio" id="palliative1" name="palliative" onclick="display1()" value="Yes"></td>
      <td><input type="radio" id="palliative2" name="palliative" onclick="display1()" value="No"></td>
      <td><input type="radio" id="palliative3" name="palliative" onclick="display1()" value="N/A"></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- Pain assessment & management</td>
      <td><input type="radio" id="assessment" name="assessment" value="Yes"></td>
      <td><input type="radio" id="assessment1" name="assessment" value="No"></td>
      <td><input type="radio" id="assessment2" name="assessment" value="N/A"></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- Psychosocial management</td>
      <td><input type="radio" id="sychosocial" name="sychosocial" value="Yes"></td>
      <td><input type="radio" id="sychosocial1" name="sychosocial" value="No"></td>
      <td><input type="radio" id="sychosocial2" name="sychosocial" value="N/A"></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- Rehabilitation</td>
      <td><input type="radio" id="rehabilitation" name="rehabilitation" value="Yes"></td>
      <td><input type="radio" id="rehabilitation1" name="rehabilitation" value="No"></td>
      <td><input type="radio" id="rehabilitation2" name="rehabilitation" value="N/A"></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- Survivorship</td>
      <td><input type="radio" id="survivorship" name="survivorship" value="Yes"></td>
      <td><input type="radio" id="survivorship1" name="survivorship" value="No"></td>
      <td><input type="radio" id="survivorship2" name="survivorship" value="N/A"></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- End of life care</td>
      <td><input type="radio" id="care" name="care" value="Yes"></td>
      <td><input type="radio" id="care1" name="care" value="No"></td>
      <td><input type="radio" id="care2" name="care" value="N/A"></td>
      </tr>
      <tr>
      <td></td>
      <td>k. Cancer registration</td>
      <td><input type="radio" id="registration" name="registration" value="Yes"></td>
      <td><input type="radio" id="registration1" name="registration" value="No"></td>
      <td><input type="radio" id="registration2" name="registration" value="N/A"></td>
      </tr>
      <tr>
      <td></td>
      <td>l. Comprehensive laboratory & pathology
services</td>
<td><input type="radio" id="comprensive" name="comprehensive_lab" value="Yes"></td>
      <td><input type="radio" id="comprensive" name="comprehensive_lab" value="No"></td>
      <td><input type="radio" id="comprensive" name="comprehensive_lab" value="N/A"></td>
      </tr>
      <tr>
      <td></td>
      <td>m. Comprehensive radiology services</td>
      <td><input type="radio" id="comprensive" name="comprehensive_radiology" value="Yes"></td>
      <td><input type="radio" id="comprensive" name="comprehensive_radiology" value="No"></td>
      <td><input type="radio" id="comprensive" name="comprehensive_radiology" value="N/A"></td>
</tr>
      <tr>
      <td></td>
      <td>n. Radiation oncology</td>
      <td><input type="radio" id="comprensive" name="radiation_oncology" value="Yes"></td>
      <td><input type="radio" id="comprensive" name="radiation_oncology" value="No"></td>
      <td><input type="radio" id="comprensive" name="radiation_oncology" value="N/A"></td>
      </tr>
      <tr>
      <td></td>
      <td>o. Nuclear medicine</td>
      <td><input type="radio" id="nuclear_medicine" name="nuclear_medicine" value="Yes"></td>
      <td><input type="radio" id="nuclear_medicine" name="nuclear_medicine" value="No"></td>
      <td><input type="radio" id="nuclear_medicine" name="nuclear_medicine" value="N/A"></td>
      </tr>
      <tr>
      <td></td>
      <td>p. Oncology training programs</td>
      <td><input type="radio" id="oncology_training" name="oncology_training" value="Yes"></td>
      <td><input type="radio" id="oncology_training" name="oncology_training" value="No"></td>
      <td><input type="radio" id="oncology_training" name="oncology_training" value="N/A"></td>
      </tr>
      <tr>
      <td></td>
      <td>q. Cancer research</td>
      <td><input type="radio" id="cancer_research" name="cancer_research" value="Yes"></td>
      <td><input type="radio" id="cancer_research" name="cancer_research" value="No"></td>
      <td><input type="radio" id="cancer_research" name="cancer_research" value="N/A"></td>
      </tr>
      <tr>
      <td></td>
      <td >r. Other (specify)</td>
      <td colspan="4"><input style="width:100%;background: #FBF4F4;" class="form-control" type="email" name="others"/></td>
      </tr>
      <tr style="padding-bottom:50px;">
      <td>2</td>
      <td>Does the centre have a mechanism to ensure continuity of care, follow up and survivorship?</td>
      <td><input type="radio" id="mechanism" name="mechanism" value="Yes"></td>
      <td><input type="radio" id="mechanism" name="mechanism" value="No"></td>
      <td><input type="radio" id="mechanism" name="mechanism" value="N/A"></td>
      </tr>
      <tr>
      <td>3</td>
      <td>Does the centre provide routine patient assessment
       of:</td>
       <td><input type="radio" id="routine1" name="routine" onclick="display2()" value="Yes"></td>
      <td><input type="radio" id="routine2" name="routine" onclick="display2()" value="No"></td>
      <td><input type="radio" id="routine3" name="routine" onclick="display2()" value="N/A"></td>
      </tr>
      <tr>

        </table>


<table class="">
<tr style="height:40px">
        <th style="width:5%"></th>
        <th style="width:50%"></th>
        <th style="width:10%"></th>
        <th style="width:15%"></th>
        <th style="width:15%"></th>
    </tr>
    <tr>
      <td></td>
      <td style="padding-left:30px;">- Physical</td>
      <td><input type="radio" id="Physical" name="Physical" value="Yes"></td>
      <td><input type="radio" id="Physical1" name="Physical" value="No"></td>
      <td><input type="radio" id="Physical2" name="Physical" value="N/A"></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- Psychological symptoms</td>
      <td><input type="radio" id="symptoms" name="symptoms" value="Yes"></td>
      <td><input type="radio" id="symptoms1" name="symptoms" value="No"></td>
      <td><input type="radio" id="symptoms2" name="symptoms" value="N/A"></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- Social support</td>
      <td><input type="radio" id="support" name="support" value="Yes"></td>
      <td><input type="radio" id="support1" name="support" value="No"></td>
      <td><input type="radio" id="support2" name="support" value="N/A"></td>
      </tr>
      <tr>
      <td>4</td>
      <td>Does the centre incorporate support of family members/caregivers?</td>
      <td><input type="radio" id="incorporate" name="incorporate" value="Yes"></td>
      <td><input type="radio" id="incorporate" name="incorporate" value="No"></td>
      <td><input type="radio" id="incorporate" name="incorporate" value="N/A"></td>
      </tr>
      <tr>

      <td>5</td>
      <td>Does the centre provide emergency care of inadequately relieved physical and psychological symptoms?
</td>
<td><input type="radio" id="inadequately" name="inadequately" value="Yes"></td>
      <td><input type="radio" id="inadequately" name="inadequately" value="No"></td>
      <td><input type="radio" id="inadequately" name="inadequately" value="N/A"></td>
      </tr>
      <tr>
      <td>6</td>
      <td>Does the centre have mechanisms for linkage to
home based care, hospices and coordination of cancer care with primary care providers?</td>
      <td><input type="radio" id="coordination" name="coordination" value="Yes"></td>
      <td><input type="radio" id="coordination" name="coordination" value="No"></td>
      <td><input type="radio" id="coordination" name="coordination" value="N/A"></td>
      </tr>
      <tr>
      <td>7</td>
      <td>Is the centre involved in oncology-related capacity
building of healthcare providers?</td>
<td><input type="radio" id="oncology_related" name="oncology_related" value="Yes"></td>
      <td><input type="radio" id="oncology_related" name="oncology_related" value="No"></td>
      <td><input type="radio" id="oncology_related" name="oncology_related" value="N/A"></td>
      </tr>
      <tr>
      <td></td>
      <td>NB: Attach relevant documents with the application
form</td>
<td><input type="radio" id="relevant" name="relevant" value="Yes"></td>
      <td><input type="radio" id="relevant" name="relevant" value="No"></td>
      <td><input type="radio" id="relevant" name="relevant" value="N/A"></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- Clinical service license facility form from
KMPDB</td>
      <td colspan="3"><input type="file"  placeholder="Choose files" multiple name="Clinical[]" ></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;"> -Certified academic qualifications of staff at the
centre</td>
<td colspan="3"><input  id="academic" name="academic[]" type="file"  placeholder="Choose files" multiple ></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- Professional practice registration forms</td>
      <td colspan="3"><input  id="Professional" name="Professional[]" type="file" placeholder="Choose files" multiple></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- Retention certificates</td>
      <td colspan="3"><input  id="certificates" name="certificates[]" type="file"  placeholder="Choose files" multiple></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- Design plans for the centre</td>
      <td colspan="3"><input  id="plans" name="plans[]" type="file" placeholder="Choose files" multiple></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- Waste disposal plan</td>
      <td colspan="3"><input  id="disposal" name="disposal[]" type="file"  placeholder="Choose files" multiple></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- Evidence of compliance with relevant regula- tory bodies</td>
      <td colspan="3"><input  id="compliance" name="compliance[]" type="file" placeholder="Choose files" multiple></td>
      </tr>


</table>
<table>
<tr>
        <th>Name of Applicant:</th>
        <th ><input style="width:100%;background: #FBF4F4;" class="form-control" type="text" name="applicant_name"/></th>
    </tr>
    <tr>
        <th>Designation :</th>
        <th style="width:55%" ><input style="width:100%;background: #FBF4F4;" class="form-control" type="text" name="designation"/></th>
    </tr>
    <tr>
    <th>Signature :</th>
        <th ></th>
    </tr>
    <tr>
    <td>Date:</td>
    <td><input style="width:100%;background: #FBF4F4;" class="form-control" type="date" name="application_date"/></td>
  </tr>
</table>
<table style="margin-bottom:30px;margin-left: -30px;">
            </table>
              <table style="width:75%;margin-left: 40px;margin-right: -80px;">
      <tr style="background-color: #ffcc99; height:40px">
        <th style="width:35%">Send to</th>
        <th style="width:25%">Send via E-mail to</th>
    </tr>
    <tr>
        <th style="width:35%">National Cancer Institute-Kenya
Ministry of Health, Cathedral Road,
Upper Hill,
P.O. Box 30016-00100, Nairobi </th>
        <th style="width:25%;margin-bottom:-30px"><p style="width:100%;margin-bottom:-20px">ncikenya@gmail.com</p></th>
    </tr>
</table>

<table>
<h4 class="flex-header"style="margin-bottom:10px"> FOR OFFICIAL USE ONLY</h4>
<table>
<tr>
        <th>Name of Applicant:</th>
        <th ><input style="width:100%;background: #FBF4F4;" class="form-control" type="text" name="officer_name"/></th>
    </tr>
    <tr>
        <th>Designation :</th>
        <th style="width:55%" ><input style="width:100%;background: #FBF4F4;" class="form-control" type="text" name="off_designation"/></th>
    </tr>
    <tr>
    <th>Signature :</th>
        <th ></th>
    </tr>
    <tr>
    <td>Date:</td>
    <td><input style="width:100%;background: #FBF4F4;" class="form-control" type="date" name="off_date"/></td>
  </tr>
</table>
</table>
<button type="submit" style="background-color: #D820C5;border-radius:10px;width: 90px;
    height: 40;
    float: right;
    margin-bottom: 10px;color:white" value="Submit">Apply</button>       
  </form>
            
        </main>
       
       
    </div>
    
    @include('common/nci_footer')
@stop
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#oncology').on('change', function(e) {
        var radios=document.querySelector('input[name="oncology"]:checked');
        var checkRadio = document.querySelector(
                'input[name="oncology"]:checked');
              
            if(checkRadio != null) {
                var vak=checkRadio.value;
                alert(vak);
            }
            else {alert("Please select")
            }
    })
});
function display() { 
    alert("Please select")
            if(document.getElementById('oncology1').checked) {
                var checkRadio = document.querySelector(
                'input[name="oncology"]:checked');
              
            if(checkRadio != null) {
                document.getElementById("chemotherapy").checked = true;
                document.getElementById("therapy").checked = true;
                document.getElementById("hormonal").checked = true;
                document.getElementById("immunotherapy").checked = true;
                document.getElementById("transplants").checked = true;
                document.getElementById("chemotherapy").disabled = false;  
                document.getElementById("therapy").disabled = false;  
                document.getElementById("hormonal").disabled = false;  
                document.getElementById("immunotherapy").disabled = false;  
                document.getElementById("transplants").disabled = false; 
                var vak=checkRadio.value;
            }
            else {
                alert("Please select")
            }
            }
            else if(document.getElementById('oncology2').checked) {
                var checkRadio = document.querySelector(
                'input[name="oncology"]:checked');
              
            if(checkRadio != null) {
                var vak=checkRadio.value;
                document.getElementById("chemotherapy1").checked = true;
                document.getElementById("therapy1").checked = true;
                document.getElementById("hormonal1").checked = true;
                document.getElementById("immunotherapy1").checked = true;
                document.getElementById("transplants1").checked = true;
                document.getElementById("chemotherapy").disabled = true;  
                document.getElementById("therapy").disabled = true;  
                document.getElementById("hormonal").disabled = true;  
                document.getElementById("immunotherapy").disabled = true;  
                document.getElementById("transplants").disabled = true;  
            }
            else {
                alert("Please select")
            }  
            }
            else if(document.getElementById('oncology3').checked) {
                var checkRadio = document.querySelector(
                'input[name="oncology"]:checked');
              
            if(checkRadio != null) {
                var vak=checkRadio.value;
                document.getElementById("chemotherapy2").checked = true;
                document.getElementById("therapy2").checked = true;
                document.getElementById("hormonal2").checked = true;
                document.getElementById("immunotherapy2").checked = true;
                document.getElementById("transplants2").checked = true;
                document.getElementById("chemotherapy").disabled = true;  
                document.getElementById("therapy").disabled = true;  
                document.getElementById("hormonal").disabled = true;  
                document.getElementById("immunotherapy").disabled = true;  
                document.getElementById("transplants").disabled = true; 
            }
            else {
                alert("Please select")
            }  
        }
        }
function display1() { 
            if(document.getElementById('palliative1').checked) {
                var checkRadio = document.querySelector(
                'input[name="palliative"]:checked');
              
            if(checkRadio != null) {
                document.getElementById("assessment").checked = true;
                document.getElementById("sychosocial").checked = true;
                document.getElementById("rehabilitation").checked = true;
                document.getElementById("survivorship").checked = true;
                document.getElementById("care").checked = true;
                document.getElementById("assessment").disabled = false;  
                document.getElementById("sychosocial").disabled = false;  
                document.getElementById("rehabilitation").disabled = false;  
                document.getElementById("survivorship").disabled = false;  
                document.getElementById("care").disabled = false; 
                var vak=checkRadio.value;
            }
            else {
                alert("Please select")
            }
            }
            else if(document.getElementById('palliative2').checked) {
                var checkRadio = document.querySelector(
                'input[name="palliative"]:checked');
              
            if(checkRadio != null) {
                var vak=checkRadio.value;
                document.getElementById("assessment1").checked = true;
                document.getElementById("sychosocial1").checked = true;
                document.getElementById("rehabilitation1").checked = true;
                document.getElementById("survivorship1").checked = true;
                document.getElementById("care1").checked = true;
                document.getElementById("assessment").disabled = true;  
                document.getElementById("sychosocial").disabled = true;  
                document.getElementById("rehabilitation").disabled = true;  
                document.getElementById("survivorship").disabled = true;  
                document.getElementById("care").disabled = true;  
            }
            else {
                alert("Please select")
            }  
            }
            else if(document.getElementById('palliative3').checked) {
                var checkRadio = document.querySelector(
                'input[name="palliative"]:checked');
              
            if(checkRadio != null) {
                var vak=checkRadio.value;
                document.getElementById("assessment2").checked = true;
                document.getElementById("sychosocial2").checked = true;
                document.getElementById("rehabilitation2").checked = true;
                document.getElementById("survivorship2").checked = true;
                document.getElementById("care2").checked = true;
                document.getElementById("assessment").disabled = true;  
                document.getElementById("sychosocial").disabled = true;  
                document.getElementById("rehabilitation").disabled = true;  
                document.getElementById("survivorship").disabled = true;  
                document.getElementById("care").disabled = true; 
            }
            else {
                alert("Please select")
            }  
        }
        }
        function display2() { 
            if(document.getElementById('routine1').checked) {
                var checkRadio = document.querySelector(
                'input[name="routine"]:checked');
              
            if(checkRadio != null) {
                document.getElementById("Physical").checked = true;
                document.getElementById("symptoms").checked = true;
                document.getElementById("support").checked = true;
                document.getElementById("Physical").disabled = false;  
                document.getElementById("symptoms").disabled = false;  
                document.getElementById("support").disabled = false;
                var vak=checkRadio.value;
            }
            else {
                alert("Please select")
            }
            }
            else if(document.getElementById('routine2').checked) {
                var checkRadio = document.querySelector(
                'input[name="routine"]:checked');
              
            if(checkRadio != null) {
                var vak=checkRadio.value;
                document.getElementById("Physical1").checked = true;
                document.getElementById("symptoms1").checked = true;
                document.getElementById("support1").checked = true;
                document.getElementById("Physical").disabled = true;  
                document.getElementById("symptoms").disabled = true;  
                document.getElementById("support").disabled = true;   
            }
            else {
                alert("Please select")
            }  
            }
            else if(document.getElementById('routine3').checked) {
                var checkRadio = document.querySelector(
                'input[name="routine"]:checked');
              
            if(checkRadio != null) {
                var vak=checkRadio.value;
                document.getElementById("Physical2").checked = true;
                document.getElementById("symptoms2").checked = true;
                document.getElementById("support2").checked = true;
                document.getElementById("Physical").disabled = true;  
                document.getElementById("symptoms").disabled = true;  
                document.getElementById("support").disabled = true;
            }
            else {
                alert("Please select")
            }  
        }
        }
</script>