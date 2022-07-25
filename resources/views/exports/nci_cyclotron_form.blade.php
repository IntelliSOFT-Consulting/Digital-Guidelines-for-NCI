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
      <td colspan="5">
        <h6>7. TRAINING AND INSTRUCTION OF WORKERS
Training a nd retraining requirements and documentation; interviews and observations of
routine work; staff knowledge of all routine activities; and emergency response</h6>
      </td>
      </tr>
  <tr >
      <td colspan="3" style="width:50%;height:20px" >All person nel responsibl e for tde operation/maintenance of tde facility and
production of F-18 have prescribed qualifications and/or training? </td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
  <tr >
      <td colspan="3" style="width:50%;height:20px" >All occupationally exposed personnel have undertaken a radiation safety course?</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
  <tr >
      <td colspan="3" style="width:50%;height:20px" >Refresher radiation safety training is provided periodically? </td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
  <tr >
      <td colspan="3" style="width:50%;height:20px" >Training records maintained for each worker? 
 </td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
 <tr >
      <td colspan="3" style="width:50%;height:20px" >Interviews witd personnel demonstrate an adequate level of understanding regarding
safe working procedures?</td>
   <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
   </tr>
<tr >
    <td colspan="3" style="height:20px" >Discussion w itd tde RSO demonstrates a n appropriate knowledge of t he A ct a nd
subsidiary legislations, tde licence requirements, tde licence conditions, safe working</td>
  <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
</tr>
<tr >
    <td colspan="3"  style="width:15%;height:20px" >Does tde RSO have appropriate resources (time, personnel) and autdority (to take
independent action to remedy urgent safety issues) to properly perform tde role?</td>
  <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
<tr >
    <td colspan="5"  style="width:15%;height:20px" >Comments:</td>
      </tr>
<tr >
    <td colspan="5"  style="width:15%;height:20px" ></td>
      </tr>
<tr >
    <td colspan="5"  style="width:15%;height:20px" ></td>
      </tr>
<tr >
    <td colspan="5"  style="width:15%;height:20px" ></td>
      </tr>

</table>
</div>
<!--  -->
<div class="page-break">

<table>
    <tr  style="background-color: #ffcc99; height:40px">
        
    </tr>
    <tr style="height:5px">
      <td colspan="5">
        <h6>8. PERSONNEL RADIATION MONITORING
Radiation protection program witd ALARA provisions; dosimetry; exposure evaluations;
dose and survey records and reports; notifications to workers</h6>
      </td>
      </tr>
  <tr >
      <td colspan="3" style="width:50%;height:20px" >Operator provides personal dosimeters to all radiation workers?</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
  <tr >
      <td colspan="3" style="width:50%;height:20px" >Dosimetry Service Provider is an autdorized provider?</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
  <tr >
      <td colspan="3" style="width:50%;height:20px" >Name of dosimetry service provider:</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
  <tr >
      <td colspan="3" style="width:50%;height:20px" >Dosimeters provided are appropriate for tde radiation type and energy? 
 </td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
 <tr >
      <td colspan="3" style="width:50%;height:20px" >Dosimeters are exchanged at tde prescribed period?</td>
   <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
   </tr>
<tr >
    <td colspan="3" style="width:15%;height:20px" >Dosimetry reports are promptly reviewed by tde RSO?</td>
  <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
</tr>
<tr >
    <td colspan="3"  style="width:15%;height:20px" >Is it evident tdat personal dosimeters are being worn by workers?</td>
  <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
<tr >
    <td colspan="3"  style="width:15%;height:20px" >Individual workers are informed of tdeir monitoring results when each monitoring
report is received (regardless of tde dose measured)?</td>
  <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
<tr >
    <td colspan="3"  style="width:15%;height:20px" >Personnel monitoring records are maintained?</td>
  <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
<tr >
    <td colspan="3"  style="width:15%;height:20px" >Are pocket dosimeters (active dosimeters) available? Are tdey used by radiation
workers?</td>
  <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
<tr >
    <td colspan="5"  style="width:15%;height:20px" >Inspector reviewed personnel monitoring records for tde period from/ to</td>
      </tr>
<tr >
    <td colspan="5"  style="width:15%;height:20px" >Comments (include tde maximum doses to workers during tdis review period)</td>
      </tr>
<tr >
    <td colspan="5"  style="width:15%;height:20px" ></td>
      </tr>
<tr >
    <td colspan="5"  style="width:15%;height:20px" ></td>
      </tr>
<tr >
    <td colspan="5"  style="width:15%;height:20px" ></td>
      </tr>
<tr >
    <td colspan="5"  style="width:15%;height:20px" ></td>
      </tr>
<tr >
    <td colspan="5"  style="width:15%;height:20px" ></td>
      </tr>
<tr >
    <td colspan="5"  style="width:15%;height:20px" ></td>
      </tr>
<tr >
    <td colspan="5"  style="width:15%;height:20px" ></td>
      </tr>
<tr >
    <td colspan="5"  style="width:15%;height:20px" ></td>
      </tr>
<tr >
    <td colspan="5"  style="width:15%;height:20px" ></td>
      </tr>

</table>
  </div>
  <div class="page-break">
<table>
    <tr  style="background-color: #ffcc99; height:40px">
        
    </tr>
    <tr style="height:5px">
      <td colspan="6">
        <h6>9. DETAILS OF CYCLOTRON</h6>
      </td>
      </tr>
      <tr >
      <td colspan="3" style="height:20px" >Cyclotron Unit make:</td>
    <td  colspan="3"style="width:15%;height:20px" ></td>
      </tr>
      <tr >
      <td colspan="3" style="height:20px" > Cyclotron Unit Model:</td>
    <td  colspan="3" style="width:15%;height:20px" ></td>
      </tr>
  <tr >
      <td colspan="3" style="height:20px" >Cyclotron Unit Serial No</td>
    <td colspan="3" style="width:15%;height:20px" ></td>
      </tr>
  <tr >
      <td colspan="3" style="height:20px" >Type of shielding:
 </td>
    <td  style="width:20%;height:20px" ><input type="checkbox" >Unshielded</input></td>
    <td colspan="2"  style="width:20%;height:20px" ><input type="checkbox" >Self-shielded</input></td>
      </tr>
 <tr >
      <td colspan="3" style="height:20px" >Beam Type:</td>
   <td  style="width:15%;height:20px" ><input type="checkbox" >Protons</input></td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >Deuterons</input></td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >Deuterons</input></td>
   </tr>
   <tr >
      <td colspan="3" style="height:20px" >Nominal Beam Energy:
 </td>
    <td  style="width:40%;height:20px" >Protons: ………………. MeV</td>
    <td colspan="2" style="width:100%;height:20px" >Deuterons: ………………. MeV</td>
      </tr>
      <tr >
      <td colspan="3" style="height:20px" >Nominal Beam Energy:
 </td>
    <td  style="width:40%;height:20px" >Protons: ………………. MeV</td>
    <td colspan="2" style="width:100%;height:20px" >Deuterons: ………………. MeV</td>
      </tr>
<tr >



    <td colspan="6"  style="width:15%;height:20px" >Number of target ports available for radioisotopes production: ……………………</td>
      </tr>
<tr >
    <td colspan="6"  style="width:15%;height:20px" >Number of target ports used at tde time for radioisotopes production: ……………………</td>
      </tr>
<tr >
    <td colspan="6"  style="width:15%;height:20px" >Radioisotopes produced: ……………………</td>
      </tr>
<tr >
    <td colspan="6"  style="width:15%;height:20px" >Comments</td>
      </tr>
<tr >
    <td colspan="6"  style="width:15%;height:20px" ></td>
      </tr>
<tr >
    <td colspan="6"  style="width:15%;height:20px" ></td>
      </tr>
<tr >
    <td colspan="6"  style="width:15%;height:20px" ></td>
      </tr>
<tr >
    <td colspan="6"  style="width:15%;height:20px" ></td>
      </tr>
<tr >
    <td colspan="6"  style="width:15%;height:20px" ></td>
      </tr>
<tr >
    <td colspan="6"  style="width:15%;height:20px" ></td>
      </tr>
<tr >
    <td colspan="6"  style="width:15%;height:20px" ></td>
      </tr>

</table>
  </div>
  <div class="page-break">

<table>
    <tr  style="background-color: #ffcc99; height:40px">
        
    </tr>
    <tr style="height:3px">
      <td style="width:5%;height:20px" colspan="5">
        <h6>10 INTERLOCK ,ACCESS CONTROL AND OtdER  SAFETY FEATURES</h6>
      </td>
      </tr>
      <tr >
        <td style="width:5%;height:20px" >Tally</td>
      <td colspan="4" style="width:50%;height:20px" >Control console access passowrd/key working and secured</td>
      </tr>
  <tr >
     <td></td>
      <td style="width:70%;" >Control console access passowrd/key working and secured</td>
    <td  style="width:10%;" ><input type="checkbox" >YES</input></td>
    <td  colspan="2" style="width:5%;" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr >
     <td></td>
      <td style="width:70%;" ></td>
    <td  style="width:10%;" >Provided</td>
    <td  colspan="2" style="width:5%;" ><input type="checkbox" >Working</input></td>
      </tr>
      <tr >
     <td>(ii) </td>
      <td>Cyclotron  vault door interlock</td>
    <td  style="width:10%;" ><input type="checkbox" >YES</input><input type="checkbox" >NO</input></td>
    <td  colspan="2" style="width:20%;" ><input type="checkbox" >YES</input><input type="checkbox" >NO</input></td>
      </tr>
      <tr >
     <td>(iii)</td>
      <td style="width:70%;" >Emergency switch "off: on control console</td>
    <td  style="width:10%;" ><input type="checkbox" >YES</input></td>
    <td  colspan="2" style="width:5%;" ><<input type="checkbox" >YES</input><input type="checkbox" >NO</input></td>
      </tr>
      <tr >
     <td>(iv)</td>
      <td style="width:70%;" >Cyclotron  vault door interlock</td>
    <td  style="width:10%;" ><input type="checkbox" >YES</input><input type="checkbox" >NO</input></td>
    <td  colspan="2" style="width:5%;" ><input type="checkbox" >YES</input><input type="checkbox" >NO</input></td>
      </tr>
      <tr >
     <td>(v)</td>
      <td style="width:70%;" >shelf shielding interlock</td>
    <td  style="width:10%;" ><input type="checkbox" >YES</input><input type="checkbox" >NO</input></td>
    <td  colspan="2" style="width:5%;" ><input type="checkbox" >YES</input><input type="checkbox" >NO</input></td>
      </tr>
      <tr >
     <td>(vi)</td>
      <td style="width:70%;" >Uninterupted power supply /standby power supply</td>
    <td  style="width:10%;" ><input type="checkbox" >YES</input><input type="checkbox" >NO</input></td>
    <td  colspan="2" style="width:5%;" ><input type="checkbox" >YES</input><input type="checkbox" >NO</input></td>
      </tr>
      <tr >
     <td>(vii)</td>
      <td style="width:70%;" >Provision for safe "STANDBY"  mode for cyclotron in case of power failure</td>
    <td  style="width:10%;" ><input type="checkbox" >YES</input><input type="checkbox" >NO</input></td>
    <td  colspan="2" style="width:5%;" ><input type="checkbox" >YES</input><input type="checkbox" >NO</input></td>
      </tr>
      <tr >
     <td>(viii)</td>
      <td style="width:70%;" >Provision of emrgency power for ventilation system,access control system and radiation monitoring system</td>
    <td  style="width:10%;" ><input type="checkbox" >YES</input><input type="checkbox" >NO</input></td>
    <td  colspan="2" style="width:5%;" ><input type="checkbox" >YES</input><input type="checkbox" >NO</input></td>
      </tr>
      <tr >
     <td>(ix)</td>
      <td style="width:70%;" >interlock for acces prevention into cyclotron vault,if residual radiation does inside tde vault is high</td>
    <td  style="width:10%;" ><input type="checkbox" >YES</input><input type="checkbox" >NO</input></td>
    <td  colspan="2" style="width:5%;" ><input type="checkbox" >YES</input><input type="checkbox" >NO</input></td>
      </tr>
      <tr >
     <td>(x)</td>
      <td style="width:70%;" >Beam on alarm/signal warning light at tde entrance of vault</td>
    <td  style="width:10%;" ><input type="checkbox" >YES</input><input type="checkbox" >NO</input></td>
    <td  colspan="2" style="width:5%;" ><input type="checkbox" >YES</input><input type="checkbox" >NO</input></td>
      </tr>
      <tr >
     <td>xi</td>
      <td style="width:70%;" >cooling system vacuum system/compressed air system interlock</td>
    <td  style="width:10%;" ><input type="checkbox" >YES</input><input type="checkbox" >NO</input></td>
    <td  colspan="2" style="width:5%;" ><input type="checkbox" >YES</input><input type="checkbox" >NO</input></td>
      </tr>
      <tr >
     <td>xii</td>
      <td style="width:70%;" >Area monitors inside vault witd audible warning set to a tdreshold radiation level</td>
    <td  style="width:10%;" ><input type="checkbox" >YES</input><input type="checkbox" >NO</input></td>
    <td  colspan="2" style="width:5%;" ><input type="checkbox" >YES</input><input type="checkbox" >NO</input></td>
      </tr>
      <tr >
     <td>xiii</td>
      <td style="width:70%;" >Area monitors in console room,hot ab,chemistry module,and otder rooms set to a tdreshold radiation dose level</td>
    <td  style="width:10%;" ><input type="checkbox" >YES</input><input type="checkbox" >NO</input></td>
    <td  colspan="2" style="width:5%;" ><input type="checkbox" >YES</input><input type="checkbox" >NO</input></td>
      </tr>
      <tr >
     <td>xiv</td>
      <td style="width:70%;" >Portal contaminationmonitors/area survey meters (neutron and ganmma)/pocket dosimeter are availlable</td>
    <td  style="width:10%;" ><input type="checkbox" >YES</input><input type="checkbox" >NO</input></td>
    <td  colspan="2" style="width:5%;" ><input type="checkbox" >YES</input><input type="checkbox" >NO</input></td>
      </tr>
<tr >
    <td colspan="5"  style="width:15%;height:20px" >Comments (include tde maximum doses to workers during tdis review period)</td>
      </tr>
<tr >
    <td colspan="5"  style="width:15%;height:20px" ></td>
      </tr>
<tr >
    <td colspan="5"  style="width:15%;height:20px" ></td>
      </tr>
    <tr >
    <td colspan="5"  style="width:15%;height:20px" ></td>
      </tr>

    
      </tr>

</table>
  </div>
  <div class="page-break">

<table>
    <tr  style="background-color: #ffcc99; height:40px">
        
    </tr>
    <tr style="height:5px">
      <td style="width:5%;height:20px" colspan="5">
        <h6>11. INDICATION OF VARIOUS PARAMETER ON THE CONTROL CONSOLE DISPLAY</h6>
      </td>
      </tr>
  <tr >
    <td style="width:5%;height:20px">Tally</td>
      <td colspan="3" style="width:50%;height:20px" ></td>
      </tr>
  <tr > 
      <td>(i)</td>
      <td  style="width:50%;height:20px" >Various interlock position</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td colspan="2" style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td>(ii) </td>
      <td  style="width:50%;height:20px" >Beam parameter</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td colspan="2" style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td>(iii)</td>
      <td  style="width:50%;height:20px" > Beam current</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td colspan="2" style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td>(iv)</td>
      <td  style="width:50%;height:20px" > Target selection</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td colspan="2" style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td>(v)</td>
      <td  style="width:50%;height:20px" > Utility parameter (temperature, water level, cooling agents, compressed air
pressure, nitrogen, helium, vacuum etc)</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td colspan="2" style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td>(vi)</td>
      <td  style="width:50%;height:20px" > Beam ON/OFF indication</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td colspan="2" style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td>(vii) </td>
      <td  style="width:50%;height:20px" >Ventilation/exhaust control system</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td colspan="2" style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td>(viii)</td>
      <td  style="width:50%;height:20px" > Transfer of radionuclide status</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td colspan="2" style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td>(ix)</td>
      <td  style="width:50%;height:20px" > (xi) Beam ON time display</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td colspan="2" style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td>(xii)</td>
      <td  style="width:50%;height:20px" >  Beam ‘ON’ alarm/signal warning light at the entrance of vault</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td colspan="2" style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td>(xii)</td>
      <td  style="width:50%;height:20px" >  Beam ON time display</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td colspan="2" style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
</table>
  </div>
  <div class="page-break">

<table>
    <tr  style="background-color: #ffcc99; height:40px">
        
    </tr>
    <tr style="height:5px">
      <td style="width:5%;height:20px" colspan="5">
        <h6>12. CONTROL OF AIRBONE ACTIVITY</h6>
      </td>
      </tr>
  <tr >
    <td>Tally</td>
      <td colspan="4" style="width:50%;height:20px" ></td>
      </tr>
  <tr > 
      <td rowspan="2">(i)</td>
      <td  rowspan="2" style="width:50%;height:5px" >Various interlock position</td>
      <td>Provided</td>
      
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
        <td  style="width:50%;height:20px" ><input type="checkbox" >NO</input></td>
   
  </tr>
      <tr > 
      <td>Working </td>
      <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>

      <td  style="width:50%;height:20px" ><input type="checkbox" >NO</input></td>
    </tr>
      <tr > 
      <td>(ii)</td>
      <td colspan="2" style="width:50%;height:20px" > Provision for negative pressure inside cyclotron vault
and other room?</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td>(iii)</td>
      <td colspan="2" style="width:50%;height:20px" >  Standby exhaust pump/fan at the end of ventilation duct?</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td>(iv)</td>
      <td colspan="2" style="width:50%;height:20px" > HEPA/charcoal filter/other high efficiency filter provided</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td>(v)</td>
      <td colspan="2" style="width:50%;height:20px" >Provision of decontamination and containment of used air filter</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td>(vi)</td>
      <td colspan="2" style="width:50%;height:20px" >Ventilation/exhaust control system</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
</table>
  </div>

  <div class="page-break">

<table>
    <tr style="height:5px">
      <td colspan="5">
        <h6>13. EMERGENCY PREPAREDNESS AND RESPONSE</h6>
      </td>
      </tr>
      <tr > 
      <td style="width:5%;height:20px">(i)</td>
      <td colspan="2" style="width:50%;height:20px" >Has the facility prepared it radiological emergency preparedness (REPR) and
response plan?</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td>(ii)</td>
      <td colspan="2" style="width:50%;height:20px" >Has the facility submitted a copy of its REPR to the Board?</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td>(iii)</td>
      <td colspan="2" style="width:50%;height:20px" >Has the REPR been ever exercised?</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td>(iv)</td>
      <td colspan="2" style="width:50%;height:20px" > Has the facility documented the emergency procedures?</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td>(v)</td>
      <td  colspan="4" >(v) Are the following response proceduresdisplayed in controlled and supervised area:
</td>
      </tr>
      <tr > 
      <td></td>
      <td colspan="2" style="width:50%;height:20px" >Target foils rupture </td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td></td>
      <td colspan="2" style="width:50%;height:20px" >Radioactive source stuck in transfer line</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td></td>
      <td colspan="2" style="width:50%;height:20px" >Power failure</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td></td>
      <td colspan="2" style="width:50%;height:20px" > Containment rapture in chemistry hot cell</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td></td>
      <td colspan="2" style="width:50%;height:20px" >Vial break in the QC lab</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td></td>
      <td colspan="2" style="width:50%;height:20px" >Fire breakout</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td></td>
      <td colspan="2" style="width:50%;height:20px" > Failure of ventilation system</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td></td>
      <td colspan="2" style="width:50%;height:20px" > Spillage in controlled/ supervised areas</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td>vi</td>
      <td colspan="2" style="width:50%;height:20px" >Is fire alarm system availlable?</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td  colspan="5" >Comment:
</td>
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

  <div class="page-break">

<table>
    <tr style="height:5px">
      <td colspan="5">
        <h6>
          14. NOTIFICATIONS AND REPORTS
Reporting and follow-up of t heft; loss; incidents; overexposures; safety-related e quipment
failures; change in RSO, and radiation dose reports to workers. 
</h6>
      </td>
      </tr>
      <tr > 
      <td colspan="3" style="width:50%;height:20px" >Have any notifiable incidents or accidents occurred since the last inspection?</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
<td colspan="3" style="width:50%;height:20px" >If yes, have they been reported to the Board? (If no, list the incidents or accidents in
Comments)</td>    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td  colspan="5" >Actions taken to prevent recurrence:
</td>
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
      <td  colspan="5" >Comment:
</td>
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
  <div class="page-break">

<table>
    <tr style="height:5px">
      <td colspan="5">
        <h6>
        15. TRANSPORT OF F-18 
</h6>
      </td>
      </tr>
      <tr > 
      <td  colspan="5" >Name of transport company:
</td>
      </tr>
      <tr > 
      <td colspan="3" style="width:50%;height:20px" >Is the transport company certified by the board?</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td  colspan="5" >Maximum Activity per shipment by company:
</td>
      </tr>
      <tr > 
      <td colspan="3" style="width:50%;height:20px" >Shielding, packaging and transporting in accordance with Board’s regulations and
guidance, and IAEA SSR-6 (2012) regulations?</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td colspan="3" style="width:50%;height:20px" >Company’s declaration papers have correct details and used when shipping sources?</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td colspan="3" style="width:50%;height:20px" >Any Radioactive material Shipments transported, by other than above Company?
(If the answer is yes, give details of the company in the comments section) </td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td colspan="3" style="width:50%;height:20px" >Are vials checked for contamination prior to packing?</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr >
    
      <tr > 
      <td  colspan="5" >Comment:
</td>
      </tr>
      <tr >
    <th colspan="5"  style="width:15%;" ></th>
      </tr>
      <tr >
    <th colspan="5"  style="width:15%;" ></th>
      </tr>
      <tr >
    <th colspan="5"  style="width:15%;" ></th>
      </tr>
      <tr >
    <th colspan="5"  style="width:15%;" ></th>
      </tr><tr >
    <th colspan="5"  style="width:15%;" ></th>
      </tr><tr >
    <th colspan="5"  style="width:15%;" ></th>
      </tr>
</table>
  </div>
  <div class="page-break">

<table>
    <tr style="height:5px">
      <td style="width:5%;height:20px" colspan="5">
        <h6>
        16. DELIVERY OF F-18 AT CUSTOMERS’s PREMISES 
</h6>
      </td>
      </tr>
      <tr > 
      <td colspan="3" style="width:50%;height:20px" >Are there documented procedures for delivery/receipt?</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td colspan="3" style="width:50%;height:20px" >Are there accurate records of shipments?</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td colspan="3" style="width:50%;height:20px" >What are the security measures during delivery?</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr >
    <th colspan="5"  style="width:15%;" ></th>
      </tr>
      <tr >
    <th colspan="5"  style="width:15%;" ></th>
      </tr>
      <tr >
    <th colspan="5"  style="width:15%;" ></th>
      </tr><tr > 
      <td  colspan="5" >What happens if no one is present to accept delivery? 

</td>
      </tr>
      <tr > 
      <td  colspan="5" >Comment:
</td>
      </tr>
      <tr >
    <th colspan="5"  style="width:15%;" ></th>
      </tr>
      <tr >
    <th colspan="5"  style="width:15%;" ></th>
      </tr>
      <tr >
    <th colspan="5"  style="width:15%;" ></th>
      </tr>
      <tr >
    <th colspan="5"  style="width:15%;" ></th>
      </tr><tr >
    <th colspan="5"  style="width:15%;" ></th>
      </tr><tr >
    <th colspan="5"  style="width:15%;" ></th>
      </tr>
</table>
<table>
    <tr style="height:5px">
      <td style="width:5%;height:20px" colspan="5">
        <h6>
        17. WASTE MANAGEMENT 
</h6>
      </td>
      </tr>
      <tr > 
      <td  colspan="5" >Overview (types of solid/liquid/contaminated wastes, any disposal through sink to sewer): 
 

</td>
      </tr>
      <tr > 
      <td  colspan="5" >
</td>
      </tr>
      <tr >
    <th colspan="5"  style="width:15%;" ></th>
      </tr>
      <tr >
    <th colspan="5"  style="width:15%;" ></th>
      </tr> <tr > 
      <td  colspan="5" >Location of waste: 
</td>
      </tr>
      <tr > 
      <td colspan="3" style="width:50%;height:20px" >Is the waste labelled:</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr><tr > 
      <td colspan="3" style="width:50%;height:20px" >Records of storage/disposal:</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr><tr > 
      <td colspan="3" style="width:50%;height:20px" >Monitoring:</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td  colspan="5" >Comment:
</td>
      </tr>
      <tr >
    <th colspan="5"  style="width:15%;" ></th>
      </tr>
      <tr >
    <th colspan="5"  style="width:15%;" ></th>
      </tr>
      <tr >
    <th colspan="5"  style="width:15%;" ></th>
      </tr>
      <tr >
    <th colspan="5"  style="width:15%;" ></th>
      </tr><tr >
    <th colspan="5"  style="width:15%;" ></th>
      </tr><tr >
    <th colspan="5"  style="width:15%;" ></th>
      </tr>
</table>
  </div><div class="page-break">
  <table>
    <tr style="height:5px">
      <td colspan="5">
        <h6>18. RECORDS</h6>
      </td>
      </tr> <tr > 
      <td  colspan="5" >Is the following information recorded and maintained?
</td>
      </tr>
      <tr > 
      <td style="width:5%;height:20px">(i)</td>
      <td colspan="2" style="width:50%;height:20px" >Authorizations from the Radiation Protection Board</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td>(ii)</td>
      <td colspan="2" style="width:50%;height:20px" >Staff acces and visit to the facility and radiation room</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td>(iii)</td>
      <td colspan="2" style="width:50%;height:20px" >Discharges and evaluation of doses to the public</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td>(iv)</td>
      <td colspan="2" style="width:50%;height:20px" >Results of radiation monitoring of areas</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr><tr > 
      <td>(iv)</td>
      <td colspan="2" style="width:50%;height:20px" >Results of tests and checks of safety systems (annual, biannual, monthly, daily
and special)</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr><tr > 
      <td>(iv)</td>
      <td colspan="2" style="width:50%;height:20px" >Calibration certificates for measuring instrument</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td></td>
      <td colspan="2" style="width:50%;height:20px" >Schedules for and results of maintenance and repai </td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td></td>
      <td colspan="2" style="width:50%;height:20px" > Reports on internal audits and inspections, etc</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td></td>
      <td colspan="2" style="width:50%;height:20px" >Information on waste management</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td></td>
      <td colspan="2" style="width:50%;height:20px" > Reports on investigations of incidents and accidents</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td  colspan="5" >Comment:
</td>
      </tr>
      <tr >
    <th colspan="5"  style="width:15%;" ></th>
      </tr>
      <tr >
    <th colspan="5"  style="width:15%;" ></th>
      </tr>
      <tr >
    <th colspan="5"  style="width:15%;" ></th>
      </tr>
      <tr >
    <th colspan="5"  style="width:15%;" ></th>
      </tr>
</table>
<table>
    <tr style="height:5px">
      <td colspan="5">
        <h6>19. INDEPENDENT AND CONFIRMATORY MEASUREMENTS</h6>
      </td>
      </tr>
      </tr>
      <tr > 
      <td colspan="3" style="width:50%;height:20px" >Inspector made area and other measurements for comparison to operator’s</td>
    <td  style="width:15%;height:20px" ><input type="checkbox" >YES</input></td>
    <td style="width:15%;height:20px" ><input type="checkbox" >NO</input></td>
      </tr>
      <tr > 
      <td  colspan="5" >Comments: Describe the types and results of measurements taken. Identify the
instruments used by the inspector (make, model, last calibration).
</td>
      <tr >
    <th colspan="5"  style="width:15%;" ></th>
      </tr>
      <tr >
    <th colspan="5"  style="width:15%;" ></th>
      </tr>
      <tr >
    <th colspan="5"  style="width:15%;" ></th>
      </tr>
      <tr >
    <th colspan="5"  style="width:15%;" ></th>
      </tr>
</table>
</div>