@extends('layouts.master')

 @section('content')

<div class="page-content-wrapper">
		<div class="page-content">

			<button class="btn btn green align pull-right" id="btn_print"> Print</button>
			<div class="row" id="printarea" >
				<div class="col-md-12">
					<div class="table responsive">
						<table width="100%">
							<tr>
								<td width="30%" valign="bottom">
									<div align="center" style="font-size: 20px;font-weight: bold;">PERFORMA INVOICE</div>
								</td>
							</tr>
							
						</table>
						<table width="100%" border="1">
							<tr>
								<td width="30%" valign="bottom">
									GSTIN : 08AAACK8407C1ZT
								</td>
								<td width="30%" valign="bottom">
									P.Inv.No : KARNAWAT/19-20/IN-001
								</td>
								<td width="30%" valign="bottom">
									Transaction Date: 01-04-2018
								</td>
							</tr>
							<tr >
								<td rowspan="2" width="30%" valign="bottom" style="vertical-align:bottom;text-align:center">
									<address>
										KARNAWAT MARBLES & GRANITES PVT LTD.<br/>
										N.H.-08,Village :PIPARDA<br/>
										RAJSAMAND 313324(RAJ)INDIA<br/>
										MOB:09414172036
									</address>
								</td>
								<td colspan="2" valign="top" style="vertical-align:bottom;text-align:center">
									Buyer's Order No & Date
								</td>
								
							</tr>
							<tr>
								<td colspan="2" width="30%" valign="top" style="vertical-align:bottom;text-align:center">
									Other References
								</td>
							</tr>
						
							<tr>
								<td rowspan="1" width="30%" valign="bottom" style="vertical-align:bottom;text-align:center">
									Consignee:<br/>
									DADHIMATI CONSTRUCTION COMPANY PVT LTD <br/>
									RIICO IND. AREA,PLOT NO.104-107
									PH.2 NEEMRANA ALWAR,RAJ 301706
									GSTIN/UIN 08AACCD5499F1ZE
								</td>
								<td colspan="2"  width="30%" valign="top" style="vertical-align:bottom;text-align:center">
									Buyer's (If other then Consignee)
								</td>
							</tr>
							<tr>
								<td rowspan="2" width="30%" valign="bottom" style="vertical-align:bottom;text-align:center">
									Ship To:<br/>
									DADHIMATI CONSTRUCTION COMPANY PVT LTD <br/>
									RIICO IND. AREA,PLOT NO.104-107
									PH.2 NEEMRANA ALWAR,RAJ 301706
									GSTIN/UIN 08AACCD5499F1ZE
								</td>
								<td  width="30%" valign="top" style="vertical-align:bottom;text-align:center">
									Country of Origin of Goods
								</td>
								<td  width="30%" valign="top" style="vertical-align:bottom;text-align:center">
									Final Destination
								</td>
							</tr>
							<tr>
								<td colspan="2">
									Terms Of Delivery and Payment
								</td>
							</tr>
							<tr>
								<td>Payment: 50% Advance & Bal After Deliver</td>
								<td colspan="2" rowspan="2">
									Bank: STATE BANK OF INDIA ADB BRANCH
									      RAJSAMAND(RAJ.)<br/>
									A/C NO: 61603698571<br/>
									RTGS CODE: SBIN0031308<br/>
									BRANCH:RAJSAMAND (RAJ.)<br/>
								</td>
							</tr>
							<tr>
								<td >Delivery: Within 20 Days</td>
							</tr>
						</table>
						<table width="100%" border="1">
							<thead>
								<tr>
									<th>
										Marks & NOS/ NO& Kind of Pkgs &nbsp;&nbsp; Description of Googs
									</th>
									<th style="text-align:center;">
										Quanity
									</th>
									<th style="text-align:center;">
										Rate
									</th>
									<th style="text-align:center;">
										Amount
									</th>
								</tr>
								<tr>
									<th>
										
									</th>
									<th style="text-align:center;">
										In Sq. Feet
									</th>
									<th style="text-align:center;">
										INR/Sq Feet
									</th>
									<th style="text-align:center;">
										Rs.
									</th>
								</tr>
							</thead>	
							<tbody>
								<tr>
									<td style="text-align:center;">
										GREEN POLISHED MARBLES TILES
									</td>
									<td style="text-align:center;">
										2000.00
									</td>
									<td style="text-align:center;">
										150.00
									</td>
									<td style="text-align:center;">
										300000.00
									</td>
								</tr>
								<tr>
									<td rowspan="3" style="text-align:center;">
										NOTE:ABOVE PRICES IN GST TAX,TRANSPORTTATION,INSURANCE,<br/>LOADING,UNLOADING CHARGES WILL BE EXTRA AS ACTUAL
									</td>
									<td colspan="2" style="text-align:center;">
										Total
									</td>
									<td style="text-align:center;">
										300000.00
									</td>
									
								</tr>
								<tr>
									
									<td  colspan="2" style="text-align:center;">
										CGST 9%
									</td>
									<td style="text-align:center;">
										27000
									</td>
									
								</tr>
								<tr>
									
									<td  colspan="2" style="text-align:center;">
										SGST 9%
									</td>
									<td style="text-align:center;">
										27000
									</td>
									
								</tr>
								<tr>
									<td>
										Amount Chargeable in Words:
									</td>
									<td colspan="2" style="text-align:center;">
										Total INR
									</td>
									<td style="text-align:center;">
										4100000
									</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<td colspan="4" style="text-align:Center;">
										Signature & Date<br/>
										For :Karnawat Marbles & Granites Pvt Ltd
										<br/>
										Prabuddha
										<br/>
										Authorised Signature
									</td>	
								</tr>
							</tfoot>
						</table>
						
					</div>
				</div>	
			</div>	

			
		</div>
</div>

@endsection

@section('js')
<script>
jQuery(document).ready(function() {    
		
	$("#btn_print").click(function () {
			//Hide all other elements other than printarea.
			$("#printarea").show();
			$("#btn_print").hide();
			window.print();
			$("#btn_print").show();
	});
});

</script>
@endsection
