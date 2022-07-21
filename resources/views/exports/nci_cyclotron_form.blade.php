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
    <tr  style="background-color: #ffcc99; height:40px">
        
    </tr>
    <tr>
      <td  style="width:50%;"><label style="font-weight: bold;">Nmae of the facility</label></td>
      <td></td>
      </tr>
      <tr>
      <td  style="width:50%"><label style="font-weight: bold;">Address</label>(include location of the facility)</td>
      <td></td>
      </tr>
      <tr>
      <td  style="width:50%">Telephone number</td>
      <td></td>
      </tr>
      <tr>
      <td  style="width:50%">Radiation safety officer</td>
      <td></td>
      </tr>
      <tr>
      <td  style="width:50%">license representative for the inspection</td>
      <td></td>
      </tr>
      <tr>
      <td  style="width:50%"><label style="font-weight: bold;">Date of last inspection</label></td>
      <td></td>
      </tr>
      <tr>
      <td  style="width:50%"><label style="font-weight: bold;">Date of this inspection</label></td>
      <td></td>
      </tr>
      <tr>
      <td  style="width:50%"><label style="font-weight: bold;">Starting time:</label></td>
      <td><label style="font-weight: bold;">End time:</label></td>
      </tr>
      <!-- <tr>
      <td  style="width:50%"></td>
      <td rowspan="2">
        <div class="col-md-6" style="margin-top:-10px">
            <h6 style="font-weight: bold;"><input type="checkbox" ></input></h6>
           <h6 style="font-weight: bold;"><input type="checkbox" ></input></h6>
           <h6 style="font-weight: bold;"><input type="checkbox" ></input></h6>
           <h6 style="font-weight: bold;"><input type="checkbox" ></input></h6>
        </div>
      </td>
      </tr> -->
      <!-- <tr>
      <td  style="width:50%">
       <div class="row">
          <div class="col-md-6">
            <label style="font-weight: bold;">Types of inspection</label>
          </div>
          <div class="col-md-6" style="float:right;margin-top:-45px">
            <h6 style="font-weight: bold;">Pre-authorization</h6>
           <h6 style="font-weight: bold;">Planned</h6>
           <h6 style="font-weight: bold;">Investigation</h6>
           <h6 style="font-weight: bold;">Termination</h6>
        </div>
        </div>
      </td>
      <td></td>
      </tr> -->
      <tr>
      <td  style="width:50%"></td>
      <td></td>
      </tr>
      <tr>
      <td  style="width:50%;">
      <h6 style="margin-left: 70%;font-weight: bold;margin-top:-8px">Pre-authorization</h6>
           <h6 style="margin-left: 85%;font-weight: bold;margin-top:-10px">Planned</input></h6>
           <h6 style="margin-left: 78%;font-weight: bold;margin-top:-10px">Investigation</input></h6>
           <h6 style="margin-left: 78%;font-weight: bold;margin-top:-8px">Termination</input></h6>
        
      </td>
      <td>
           <h6 style="font-weight: bold;margin-top:-8px"><input type="checkbox" ></input></h6>
           <h6 style="font-weight: bold;margin-top:-10px"><input type="checkbox" ></input></h6>
           <h6 style="font-weight: bold;margin-top:-10px"><input type="checkbox" ></input></h6>
           <h6 style="font-weight: bold;margin-top:-15px"><input type="checkbox" ></input></h6>
          </td>
      </tr>
      <tr>
      <td  style="width:50%">Recomendet Date of next inspection</td>
      <td></td>
      </tr>
      <tr>
      <td  style="width:50%">
        <label style="font-weight: bold;">Summary of findings and action</label>
        <p >No items of non compliance found</p>
        <p>items of non compliance found</p>
        <p>Follow up of previous non-compliance</p>
        
      </td>
      <td style="width:50%">
           <h6 style="font-weight: bold;margin-top:40px"><input type="checkbox" ></input></h6>
           <h6 style="font-weight: bold;"><input type="checkbox" >(to be detailed in comments)</input></h6>
           <h6 style="font-weight: bold;"><input type="checkbox" ></input></h6>
      </td>
      </tr>
      <tr>
      <td  style="width:50%">
        <p style="margin-left: 33%;">Inspector (1) name & signature</p>
        <p style="margin-left:89%;">Date</p>
      </td>
      <td style="width:50%">
      </td>
      </tr>
      <tr>
      <td  style="width:50%">
        <p style="margin-left: 33%;">Inspector (2) name & signature</p>
        <p style="margin-left:89%;">Date</p>
      </td>
      <td style="width:50%">
      </td>
      </tr>
      <tr>
      <td  style="width:50%">
        <p style="margin-left: 33%;">Inspector (3) name & signature</p>
        <p style="margin-left:89%;">Date</p>
      </td>
      <td style="width:50%">
      </td>
      </tr>
      <tr>
      <td  style="width:50%">Report approved by supervisor</td>
      <td>
        <input style="margin-left: 3%;" type="checkbox" >Yes</input>
        <input style="margin-left: 6%;" type="checkbox" > No</input>
        <input style="margin-left: 9%;" type="checkbox" >Comments(if not)</input>
      </td>
      </tr>
      <tr>
      <td  style="width:50%"><label style="font-weight: bold;">Comments</label></td>
      <td></td>
      </tr>
      <tr colspan="1">
      <th  style="width:50%" colspan="2"><label style="font-weight: bold;">Supervisor's Signature</label>(To be signed and dated)</th>
      </tr>
      <tr colspan="1">
      <th  style="width:50%;height:20px" colspan="2"></th>
      </tr>
</table>
</div>
<!--  -->
<div class="page-break">
<table>
    <tr  style="background-color: #ffcc99; height:40px">
        
    </tr>
    <tr >
      <td   style="width:50%;">
         Note that a unit identifier (i.e. px and em) are not required. A number without units is a value based on the coordinate system of the SVG viewBox. So, for example, 5 renders the same as 5% in a viewBox that is set to 0 0 100 100 (5/100 = .05 or 5%) but 10% in one that’s 0 0 50 50 (5/50 = .1 or 10%).
        Note that a unit identifier (i.e. px and em) are not required. A number without units is a value based on the coordinate system of the SVG viewBox. So, for example, 5 renders the same as 5% in a viewBox that is set to 0 0 100 100 (5/100 = .05 or 5%) but 10% in one that’s 0 0 50 50 (5/50 = .1 or 10%).
        Note that a unit identifier (i.e. px and em) are not required. A number without units is a value based on the coordinate system of the SVG viewBox. So, for example, 5 renders the same as 5% in a viewBox that is set to 0 0 100 100 (5/100 = .05 or 5%) but 10% in one that’s 0 0 50 50 (5/50 = .1 or 10%).
        Note that a unit identifier (i.e. px and em) are not required. A number without units is a value based on the coordinate system of the SVG viewBox. So, for example, 5 renders the same as 5% in a viewBox that is set to 0 0 100 100 (5/100 = .05 or 5%) but 10% in one that’s 0 0 50 50 (5/50 = .1 or 10%).
      </td>
     
      </tr>
</table>
<table>
    <tr  style="background-color: #ffcc99; height:40px">
        
    </tr>
    <tr style="height:5px">
      <th>
        <h5>1. AMENDMENTS AND PROGRAM CHANGES
Prior to the inspection, list for review any amendments submitted by the facility and
        approved by the Board since the last inspection</h5>
      </th>
      </tr>
  <tr colspan="1">
      <th  style="width:50%;height:20px" colspan="2"></th>
      </tr>
  <tr colspan="1">
      <th  style="width:50%;height:20px" colspan="2"></th>
      </tr>
  <tr colspan="1">
      <th  style="width:50%;height:20px" colspan="2"></th>
      </tr>
  <tr colspan="1">
      <th  style="width:50%;height:20px" colspan="2"></th>
      </tr>
  <tr colspan="1">
      <th  style="width:50%;height:20px" colspan="2"></th>
      </tr>
</table>
<table style="margin-bottom:10px">
    <tr  style="background-color: #ffcc99; height:40px">
        
    </tr>
    <tr style="height:5px">
      <th colspan="3">
        <h5>2. INSPECTION AND ENFORCEMENT HISTORY
Prior to the inspection, list for review any items of non- compliance during
previous 2-3 inspections</h5>
      </th>
      </tr>
    <tr colspan="1">
      <th  style="width:50%;height:20px" ><label style="font-weight: bold;">DATE</label></th>
      <th  style="width:50%;height:20px"><label style="font-weight: bold;">Inspector's</label></th>
      <th  style="width:50%;height:20px" ><label style="font-weight: bold;">Violation</label></th>
      </tr>
  <tr >
     <th  style="width:50%;height:20px" ></th>
      <th  style="width:50%;height:20px" ></th>
      <th  style="width:50%;height:20px" ></th>
      </tr>
  <tr >
     <th  style="width:50%;height:20px" ></th>
      <th  style="width:50%;height:20px" ></th>
      <th  style="width:50%;height:20px" ></th>
      </tr>
  <tr >
     <th  style="width:50%;height:20px" ></th>
      <th  style="width:50%;height:20px" ></th>
      <th  style="width:50%;height:20px" ></th>
      </tr>
  <tr >
     <th  style="width:50%;height:20px" ></th>
      <th  style="width:50%;height:20px" ></th>
      <th  style="width:50%;height:20px" ></th>
      </tr>
</table>
</div>
<div class="page-break">
<table>
  <tr >
     3. IMPLEMENTATION OF THE PREVIOUS INSPECTION RECOMMENDATIONS
…………………………………………………………………………………………………
………………………………………………………………………………………………………
………………………………………………………………………………………………………
………………………………………………………………………………………………………
…………………………………………………………………………………
      </tr>
  
    <tr style="height:5px">
      <th>
        <h6>4. INCIDENT / EVENT HISTORY
Prior to the inspection, list for review any incidents or events reported by the facility to the
Board since the last inspection</h6>
      </th>
      </tr>
  <tr colspan="1">
      <th  style="width:50%;height:20px" colspan="2"></th>
      </tr>
  <tr colspan="1">
      <th  style="width:50%;height:20px" colspan="2"></th>
      </tr>
  <tr colspan="1">
      <th  style="width:50%;height:20px" colspan="2"></th>
      </tr>
  <tr colspan="1">
      <th  style="width:50%;height:20px" colspan="2"></th>
      </tr>
  <tr colspan="1">
      <th  style="width:50%;height:20px" colspan="2"></th>
      </tr>
  </table>
<!--    -->
<table>
    <tr  style="background-color: #ffcc99; height:40px">
        
    </tr>
    <tr style="height:5px">
      <th colspan="3">
        <h6>5. ON-SITE VERIFICATION OF LICENCES/AUTHORIZATIONS ISSUED</h6>
      </th>
      </tr>
  <tr >
      <th  style="width:50%;height:20px" >Is the licence for operation is valid? </th>
    <th  style="width:15%;height:20px" ><input type="checkbox" >YES</input></th>
    <th  style="width:15%;height:20px" ><input type="checkbox" >NO</input></th>
      </tr>
  <tr >
      <th  style="width:50%;height:20px" >Is layout approval available?</th>
    <th  style="width:15%;height:20px" ><input type="checkbox" >YES</input></th>
    <th  style="width:15%;height:20px" ><input type="checkbox" >NO</input></th>
      </tr>
  <tr >
      <th  style="width:50%;height:20px" >Is the RSO licence/certificate valid? </th>
    <th  style="width:15%;height:20px" ><input type="checkbox" >YES</input></th>
    <th  style="width:15%;height:20px" ><input type="checkbox" >NO</input></th>
      </tr>
  <tr >
      <th  style="width:50%;height:20px" >Is RSO (licensee) the same as mentioned in the licence?
 </th>
    <th  style="width:15%;height:20px" ><input type="checkbox" >YES</input></th>
    <th  style="width:15%;height:20px" ><input type="checkbox" >NO</input></th>
      </tr>
 <tr >
      <th colspan="3" style="width:50%;height:20px" >Comments:</th>
   </tr>
<tr >
    <th colspan="3" style="height:20px" ></th>
</tr>
<tr >
    <th colspan="3"  style="width:15%;height:20px" ></th>
      </tr>
<tr >
    <th colspan="3"  style="width:15%;height:20px" ></th>
      </tr>

</table>
</div>
<div class="page-break">
<table style="margin-bottom:10px">
    <tr  style="background-color: #ffcc99; height:40px">
        
    </tr>
    <tr style="height:5px">
      <th colspan="4">
        <h6>6. OPERATING PERSONNEL
During inspection list all operating personne
(a separate sheet can be used)</h6> 
      </th>
      </tr>
    <tr colspan="1">
      <th>NO</th>
      <th  style="width:50%;height:20px" ><label style="font-weight: bold;">Type of Personnel</label></th>
      <th  style="width:50%;height:20px"><label style="font-weight: bold;">Name</label></th>
      <th  style="width:50%;height:20px" ><label style="font-weight: bold;">Qualifications</label></th>
      </tr>
  <tr colspan="1">
      <th>1</th>
      <th  style="width:50%;height:20px" ><label style="font-weight: bold;"></label></th>
      <th  style="width:50%;height:20px"><label style="font-weight: bold;"></label></th>
      <th  style="width:50%;height:20px" ><label style="font-weight: bold;"></label></th>
      </tr>
  <tr colspan="1">
      <th>2</th>
      <th  style="width:50%;height:20px" ><label style="font-weight: bold;"></label></th>
      <th  style="width:50%;height:20px"><label style="font-weight: bold;"></label></th>
      <th  style="width:50%;height:20px" ><label style="font-weight: bold;"></label></th>
      </tr>
  <tr colspan="1">
      <th>3</th>
      <th  style="width:50%;height:20px" ><label style="font-weight: bold;"></label></th>
      <th  style="width:50%;height:20px"><label style="font-weight: bold;"></label></th>
      <th  style="width:50%;height:20px" ><label style="font-weight: bold;"></label></th>
      </tr>
 <tr colspan="1">
      <th>4</th>
      <th  style="width:50%;height:20px" ><label style="font-weight: bold;"></label></th>
      <th  style="width:50%;height:20px"><label style="font-weight: bold;"></label></th>
      <th  style="width:50%;height:20px" ><label style="font-weight: bold;"></label></th>
      </tr>
  <tr colspan="1">
      <th>5</th>
      <th  style="width:50%;height:20px" ><label style="font-weight: bold;"></label></th>
      <th  style="width:50%;height:20px"><label style="font-weight: bold;"></label></th>
      <th  style="width:50%;height:20px" ><label style="font-weight: bold;"></label></th>
      </tr>
  <tr colspan="1">
      <th>6</th>
      <th  style="width:50%;height:20px" ><label style="font-weight: bold;"></label></th>
      <th  style="width:50%;height:20px"><label style="font-weight: bold;"></label></th>
      <th  style="width:50%;height:20px" ><label style="font-weight: bold;"></label></th>
      </tr>
  <tr colspan="1">
      <th>7</th>
      <th  style="width:50%;height:20px" ><label style="font-weight: bold;"></label></th>
      <th  style="width:50%;height:20px"><label style="font-weight: bold;"></label></th>
      <th  style="width:50%;height:20px" ><label style="font-weight: bold;"></label></th>
      </tr>
  <tr colspan="1">
      <th>8</th>
      <th  style="width:50%;height:20px" ><label style="font-weight: bold;"></label></th>
      <th  style="width:50%;height:20px"><label style="font-weight: bold;"></label></th>
      <th  style="width:50%;height:20px" ><label style="font-weight: bold;"></label></th>
      </tr>
</table>
<!--  -->
<table>
    <tr  style="background-color: #ffcc99; height:40px">
        
    </tr>
    <tr style="height:5px">
      <th colspan="5">
        <h6>7. TRAINING AND INSTRUCTION OF WORKERS
Training a nd retraining requirements and documentation; interviews and observations of
routine work; staff knowledge of all routine activities; and emergency response</h6>
      </th>
      </tr>
  <tr >
      <th colspan="3" style="width:50%;height:20px" >All person nel responsibl e for the operation/maintenance of the facility and
production of F-18 have prescribed qualifications and/or training? </th>
    <th  style="width:15%;height:20px" ><input type="checkbox" >YES</input></th>
    <th  style="width:15%;height:20px" ><input type="checkbox" >NO</input></th>
      </tr>
  <tr >
      <th colspan="3" style="width:50%;height:20px" >All occupationally exposed personnel have undertaken a radiation safety course?</th>
    <th  style="width:15%;height:20px" ><input type="checkbox" >YES</input></th>
    <th  style="width:15%;height:20px" ><input type="checkbox" >NO</input></th>
      </tr>
  <tr >
      <th colspan="3" style="width:50%;height:20px" >Refresher radiation safety training is provided periodically? </th>
    <th  style="width:15%;height:20px" ><input type="checkbox" >YES</input></th>
    <th  style="width:15%;height:20px" ><input type="checkbox" >NO</input></th>
      </tr>
  <tr >
      <th colspan="3" style="width:50%;height:20px" >Training records maintained for each worker? 
 </th>
    <th  style="width:15%;height:20px" ><input type="checkbox" >YES</input></th>
    <th  style="width:15%;height:20px" ><input type="checkbox" >NO</input></th>
      </tr>
 <tr >
      <th colspan="3" style="width:50%;height:20px" >Interviews with personnel demonstrate an adequate level of understanding regarding
safe working procedures?</th>
   <th  style="width:15%;height:20px" ><input type="checkbox" >YES</input></th>
    <th  style="width:15%;height:20px" ><input type="checkbox" >NO</input></th>
   </tr>
<tr >
    <th colspan="3" style="width:%;height:20px" >Discussion w ith the RSO demonstrates a n appropriate knowledge of t he A ct a nd
subsidiary legislations, the licence requirements, the licence conditions, safe working</th>
  <th  style="width:15%;height:20px" ><input type="checkbox" >YES</input></th>
    <th  style="width:15%;height:20px" ><input type="checkbox" >NO</input></th>
</tr>
<tr >
    <th colspan="3"  style="width:15%;height:20px" >Does the RSO have appropriate resources (time, personnel) and authority (to take
independent action to remedy urgent safety issues) to properly perform the role?</th>
  <th  style="width:15%;height:20px" ><input type="checkbox" >YES</input></th>
    <th  style="width:15%;height:20px" ><input type="checkbox" >NO</input></th>
      </tr>
<tr >
    <th colspan="5"  style="width:15%;height:20px" >Comments:</th>
      </tr>
<tr >
    <th colspan="5"  style="width:15%;height:20px" ></th>
      </tr>
<tr >
    <th colspan="5"  style="width:15%;height:20px" ></th>
      </tr>
<tr >
    <th colspan="5"  style="width:15%;height:20px" ></th>
      </tr>

</table>
</div>
<!--  -->
<div class="page-break">

<table>
    <tr  style="background-color: #ffcc99; height:40px">
        
    </tr>
    <tr style="height:5px">
      <th colspan="5">
        <h6>8. PERSONNEL RADIATION MONITORING
Radiation protection program with ALARA provisions; dosimetry; exposure evaluations;
dose and survey records and reports; notifications to workers</h6>
      </th>
      </tr>
  <tr >
      <th colspan="3" style="width:50%;height:20px" >Operator provides personal dosimeters to all radiation workers?</th>
    <th  style="width:15%;height:20px" ><input type="checkbox" >YES</input></th>
    <th  style="width:15%;height:20px" ><input type="checkbox" >NO</input></th>
      </tr>
  <tr >
      <th colspan="3" style="width:50%;height:20px" >Dosimetry Service Provider is an authorized provider?</th>
    <th  style="width:15%;height:20px" ><input type="checkbox" >YES</input></th>
    <th  style="width:15%;height:20px" ><input type="checkbox" >NO</input></th>
      </tr>
  <tr >
      <th colspan="3" style="width:50%;height:20px" >Name of dosimetry service provider:</th>
    <th  style="width:15%;height:20px" ><input type="checkbox" >YES</input></th>
    <th  style="width:15%;height:20px" ><input type="checkbox" >NO</input></th>
      </tr>
  <tr >
      <th colspan="3" style="width:50%;height:20px" >Dosimeters provided are appropriate for the radiation type and energy? 
 </th>
    <th  style="width:15%;height:20px" ><input type="checkbox" >YES</input></th>
    <th  style="width:15%;height:20px" ><input type="checkbox" >NO</input></th>
      </tr>
 <tr >
      <th colspan="3" style="width:50%;height:20px" >Dosimeters are exchanged at the prescribed period?</th>
   <th  style="width:15%;height:20px" ><input type="checkbox" >YES</input></th>
    <th  style="width:15%;height:20px" ><input type="checkbox" >NO</input></th>
   </tr>
<tr >
    <th colspan="3" style="width:15%;height:20px" >Dosimetry reports are promptly reviewed by the RSO?</th>
  <th  style="width:15%;height:20px" ><input type="checkbox" >YES</input></th>
    <th  style="width:15%;height:20px" ><input type="checkbox" >NO</input></th>
</tr>
<tr >
    <th colspan="3"  style="width:15%;height:20px" >Is it evident that personal dosimeters are being worn by workers?</th>
  <th  style="width:15%;height:20px" ><input type="checkbox" >YES</input></th>
    <th  style="width:15%;height:20px" ><input type="checkbox" >NO</input></th>
      </tr>
<tr >
    <th colspan="3"  style="width:15%;height:20px" >Individual workers are informed of their monitoring results when each monitoring
report is received (regardless of the dose measured)?</th>
  <th  style="width:15%;height:20px" ><input type="checkbox" >YES</input></th>
    <th  style="width:15%;height:20px" ><input type="checkbox" >NO</input></th>
      </tr>
<tr >
    <th colspan="3"  style="width:15%;height:20px" >Personnel monitoring records are maintained?</th>
  <th  style="width:15%;height:20px" ><input type="checkbox" >YES</input></th>
    <th  style="width:15%;height:20px" ><input type="checkbox" >NO</input></th>
      </tr>
<tr >
    <th colspan="3"  style="width:15%;height:20px" >Are pocket dosimeters (active dosimeters) available? Are they used by radiation
workers?</th>
  <th  style="width:15%;height:20px" ><input type="checkbox" >YES</input></th>
    <th  style="width:15%;height:20px" ><input type="checkbox" >NO</input></th>
      </tr>
<tr >
    <th colspan="5"  style="width:15%;height:20px" >Inspector reviewed personnel monitoring records for the period from/ to</th>
      </tr>
<tr >
    <th colspan="5"  style="width:15%;height:20px" >Comments (include the maximum doses to workers during this review period)</th>
      </tr>
<tr >
    <th colspan="5"  style="width:15%;height:20px" ></th>
      </tr>
<tr >
    <th colspan="5"  style="width:15%;height:20px" ></th>
      </tr>
<tr >
    <th colspan="5"  style="width:15%;height:20px" ></th>
      </tr>
<tr >
    <th colspan="5"  style="width:15%;height:20px" ></th>
      </tr>
<tr >
    <th colspan="5"  style="width:15%;height:20px" ></th>
      </tr>
<tr >
    <th colspan="5"  style="width:15%;height:20px" ></th>
      </tr>
<tr >
    <th colspan="5"  style="width:15%;height:20px" ></th>
      </tr>
<tr >
    <th colspan="5"  style="width:15%;height:20px" ></th>
      </tr>
<tr >
    <th colspan="5"  style="width:15%;height:20px" ></th>
      </tr>

</table>
  </div>