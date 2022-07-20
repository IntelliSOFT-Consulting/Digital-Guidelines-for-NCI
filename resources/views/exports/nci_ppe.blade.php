<!doctype html>
<html lang="{{ config('app.lang') }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>@yield('title')</title>

    @if($cspContent ?? false)
        <meta http-equiv="Content-Security-Policy" content="{{ $cspContent }}">
    @endif
    @include('exports.parts.styles', ['format' => $format, 'engine' => $engine ?? ''])
    @include('exports.parts.custom-head')
</head>
<style type="text/css">
  .ppe{
    border-bottom: 1px solid black;
  }
  .ppe_e,.ppe_title{
    margin: 5px;
  }
  p{
    margin: 5px;
  }
</style>
<body class="export export-format-{{ $format }} export-engine-{{ $engine ?? 'none' }}">
  <div class="ppe_title">LIST OF PERSONAL PROTECTIVE EQUIPMENT FOR SAFE CHEMOTHERAPY HANDLING</div>
<div class="page-content" style="border: 2px solid black;margin: 5px;">
<div class="ppe ppelist" >
  <p>Lint free disposable gowns (knitted knife).</p>
</div>

<div class="ppe ppelist">
  <p>Nitrile gloves, non-powdered (assorted sizes)</p>
</div>

<div class="ppe ppelist">
  <p>Disposable shoe covers</p>
</div>

<div class="ppe ppelist">
  <p>Safety goggles/eye splash shields</p>
</div>

<div class="ppe ppelist">
  <p>N95 respirators/masks</p>
</div>

<div class="ppe ppelist">
  <p>Cytotoxic drug spill kits (can be assembled on-site or purchased as a kit) - absorbent

sheets/spill pads; disposable scoop for picking up broken glass/fragments; puncture-
resistant container for glass fragments; disposable gown; N95 respirators; disposable shoe

covers; 2 pairs of chemotherapy gloves; safety goggles/eye splash shields; sign saying
‘caution hazardous drug spill; detergent/bleach; hazardous waste disposable bags with a
hazardous waste label</p>
</div>

<div class="ppe ppelist">
  <p>Needles, syringes and tubing with luer lock connectors</p>
</div>

<div class="ppe ppelist">
  <p>Disposable hair covers</p>
</div>

<div class="ppe ppelist">
  <p>Disposable beard cover</p>
</div>

<div class="ppe ppelist">
  <p>Hazardous waste disposal bags</p>
</div>

<div class="ppe ppelist">
  <p>Closed system transfer devices</p>
</div>

<div class="ppe_e">
  <p>Cold & hot packs</p>
</div>

</div>
</body>
</html>