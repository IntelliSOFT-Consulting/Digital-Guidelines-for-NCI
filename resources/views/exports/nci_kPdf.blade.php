<!doctype html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>@yield('title')</title>

    @if($cspContent ?? false)
        <meta http-equiv="Content-Security-Policy" content="{{ $cspContent }}">
    @endif
</head>
<style>
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
</style>
</head>
<div class="page-break">
<table>
<table style="width:90%; margin-left:5%" >
    <tr>
    <th>
        <h3 style="text-align:center;">THE NATIONAL CANCER INSTITUTE OF KENYA CANCER MANAGEMENT CENTER CERTIFICATION APPLICATION FORM</h3>
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
        <th style="width:55%" ></th>
    </tr>
    <tr>
        <th>Physical address</th>
        <th style="width:55%"></th>
    </tr>
    <tr>
        <th>Mailing address</th>
        <th style="width:55%"></th>
    </tr>
</table>
<table>
    <tr>
        <th>Service Center type (Tick as appropriate)</th>
        <th style="width:35%">Basic Cancer Treatment Center</th>
        <th style="width:20%"></th>
    </tr>
    <tr>
        <th></th>
        <th style="width:35%">Comprehensive Cancer Center</th>
        <th style="width:20%"></th>
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
        <th style="width:55%"></th>
    </tr>
    <tr>
        <th>Mailing address</th>
        <th style="width:55%"></th>
    </tr>
</table>
<table>
    <tr>
        <th>Contacts</th>
        <th style="width:35%">Tel.</th>
        <th style="width:20%">E-mail</th>
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
        <th style="width:55%" ></th>
    </tr>
    <tr>
        <th>Mailing address</th>
        <th style="width:55%"></th>
    </tr>
</table>
<table>
  <!-- style="margin-bottom:230px" -->
    <tr>
        <th>Contacts</th>
        <th style="width:35%">Tel.</th>
        <th style="width:20%">E-mail</th>
    </tr>
</table >
<table >
<th>
        <h3 style="text-align:center;">Please indicate compliance with each of the 13 items</h3>
</th>
</table>
</div>
<div class="page-break">
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
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td>b. Cancer screening, early detection and treatment of pre-cancerous lesions</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td>c. Inpatient wards</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td>d. Ambulatory/outpatient</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td>e. Basic diagnostic laboratory & pathology</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td>f. Basic diagnostic radiology</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td>g. Surgical capacity for diagnosis and treatment</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr style="margin-left:2px">
      <td ></td>
      <td>h. Radiotherapy</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td>i. Medical oncology services</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">-Chemotherapy</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- Targeted therapy</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- Hormonal therapy</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- Immunotherapy</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- Bone marrow transplants</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td>j. Palliative care</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- Pain assessment & management</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- Psychosocial management</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- Rehabilitation</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- Survivorship</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- End of life care</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td>k. Cancer registration</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td>l. Comprehensive laboratory & pathology
services</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td>m. Comprehensive radiology services</td>
      <td></td>
      <td></td>
      <td></td>
</tr>
      <tr>
      <td></td>
      <td>n. Radiation oncology</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td>o. Nuclear medicine</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td>p. Oncology training programs</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td>q. Cancer research</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td>r. Other (specify)</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr style="padding-bottom:50px;">
      <td>2</td>
      <td>Does the centre have a mechanism to ensure continuity of care, follow up and survivorship?</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td>3</td>
      <td>Does the centre provide routine patient assessment
       of:</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>

        </table>
</div>
<div class="page-break">
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
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- Psychological symptoms</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- Social support</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td>4</td>
      <td>Does the centre incorporate support of family members/caregivers?</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>

      <td>5</td>
      <td>Does the centre provide emergency care of inadequately relieved physical and psychological symptoms?
</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td>6</td>
      <td>Does the centre have mechanisms for linkage to
home based care, hospices and coordination of cancer care with primary care providers?</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td>7</td>
      <td>Is the centre involved in oncology-related capacity
building of healthcare providers?</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td>NB: Attach relevant documents with the application
form</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- Clinical service license facility form from
KMPDB</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;"> -Certified academic qualifications of staff at the
centre</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- Professional practice registration forms</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- Retention certificates</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- Design plans for the centre</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- Waste disposal plan</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td style="padding-left:30px;">- Evidence of compliance with relevant regula- tory bodies</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
</table>

</table>
<div class="page-break">
<table>
<div class="flex-header">
          <h4> Name of Applicant:</h4>
          <div class="line"></div>
          </div>
          <div class="flex-header">
          <h4>Designation :</h4>
          <div class="line"></div>
          </div>
          <div class="flex-header">
          <h4> Signature:</h4>
          <div class="line"></div>
          </div>
          <div class="flex-header">
          <h4> Date :</h4>
          <div class="line"></div>
          </div>
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
        <th style="width:25%;margin-bottom:-30px"><p style="width:25%;margin-bottom:-20px">ncikenya@gmail.com</p></th>
    </tr>
</table>

<table>
<h4 class="flex-header"style="margin-bottom:10px"> FOR OFFICIAL USE ONLY</h4>
<div class="flex-header">
          <h4> Name of Applicant:</h4>
          <div class="line"></div>
          </div>
          <div class="flex-header">
          <h4>Received by: Name:</h4>
          <div class="line"></div>
          </div>
          <div class="flex-headerr">
          <h4> Signature:</h4>
          <div class="line"></div>
          </div>
          <div class="flex-headerr">
          <h4> Date :</h4>
          <div class="line"></div>
          </div>
</table>
</div>