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
<table >
<th>
        <h3 style="text-align:center;">NCI-K INSPECTION CHECKLIST</h3>
</th>
</table>
</div>
<div class="page-break">
<table>
    <tr style="background-color: #ffcc99; height:40px">
        <th style="width:5%">Unit</th>
      <th style="width:35%">Section/Item</th>
        <th style="width:5%">Complete</th>
        <th style="width:5%">Partial</th>
        <th style="width:5%">Absent</th>
        <th style="width:35%">Comments Remarks</th>
    </tr>
      <tr>
      <td rowspan = "9" style="margin-top:-50px">Minimum Requirements</td>
        <td></td>
        <td></td>
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
</table>
  </div>
  <div class="page-break">
    <table>
      <tr>
      <td rowspan = "7" style="margin-top:-50px">General Operational Consideration</td>
      <td></td>
      <td></td>
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
      <td colspan = "6" style="margin-top:-50px">Unit</td>
      
      </tr>
      <tr>
      <td rowspan = "3" style="margin-top:-50px">Administration</td>
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
      <td rowspan = "3" style="margin-top:-50px">Ambulatory/Outpatient</td>
       <td></td>
      <td style="padding-left:30px;"></td>
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
      <td rowspan = "3" style="margin-top:-50px">Chemoterapy</td>
       <td></td>
      <td style="padding-left:30px;"></td>
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
      
</table>
  </div>
  <div class="page-break">
    <table>
  <tr>
      <td rowspan = "3" style="margin-top:-50px">Laboratory/Patology</td>
       <td></td>
      <td style="padding-left:30px;"></td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td>m. Comprehensive radiology services</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
</tr>
      <tr>
      <td>n. Radiation oncology</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
      <td rowspan = "3" style="margin-top:-50px">Radiology</td>
       <td></td>
      <td style="padding-left:30px;"></td>
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
      <td rowspan = "3" style="margin-top:-50px">Surgery</td>
       <td></td>
      <td style="padding-left:30px;"></td>
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
      <td rowspan = "4" style="margin-top:-50px">Healthy Records AND Registry</td>
       <td></td>
      <td style="padding-left:30px;"></td>
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
    <table>
        <tr>
  <td rowspan = "4" style="margin-top:-50px">Radiotherapy</td>
       <td></td>
      <td style="padding-left:30px;"></td>
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
      <td>3</td>
      <td>Does the centre provide routine patient assessment
       of:</td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      <tr>
  <td rowspan = "3" style="margin-top:-50px">Nuclear Medicine</td>
       <td></td>
      <td style="padding-left:30px;"></td>
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
      <td rowspan = "3" style="margin-top:-50px">Paliative Care And Survivorship</td>
       <td></td>
      <td style="padding-left:30px;"></td>
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
<td rowspan = "3" style="margin-top:-50px">Nursing</td>
       <td></td>
      <td style="padding-left:30px;"></td>
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
  <td rowspan = "3" style="margin-top:-50px">Inpatient</td>
       <td></td>
      <td style="padding-left:30px;"></td>
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
<td rowspan = "3" style="margin-top:-50px">Rehabilitation</td>
       <td></td>
      <td style="padding-left:30px;"></td>
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

         </table>
  </div>
  