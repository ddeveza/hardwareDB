

									  <div class="card">
									    <div class="card-header" id="heading5">
									      <h5 class="mb-0">
									        <button type='button' class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapseTwo">
									          Probe Card Information  <i class="fa fa-angle-down"></i>
									        </button>
									      </h5>
									    </div>
									    <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
									      <div class="card-body">
									        	<div class='row'>
									        		 <div class="col-md-3">
															      	<label>PCB Vendor:</label>
															      	<input type='text'class='form-control' name='pcbvendor' list='pcbvendorlist' value='<?php echo $PCBVendor; ?>'></input>
															      	<datalist id="pcbvendorlist">
																		<?php 
																			$sqlPCBVendor = 'SELECT DISTINCT PCBVendor from hardwarews ORDER BY PCBVendor ASC';

																			$resultPCBVendor = mysqli_query($con,$sqlPCBVendor); 

																			while($row=mysqli_fetch_array($resultPCBVendor)){

																			$PCBVendor = strtoupper($row['PCBVendor']);

																		?>
																		<option value='<?php echo $PCBVendor; ?>'>

																	 <?php } ?>
																	</datalist>
													  </div>
													  <div class="col-md-3">
															      	<label>Probecard Vendor:</label>
															      	<input type='text'class='form-control' name='pcvendor' list='pcvendorlist' value='<?php echo $PCVendor; ?>'></input>
															      		<datalist id="pcvendorlist">
																		<?php 
																			$sqlPCVendor = 'SELECT DISTINCT PCVendor from hardwarews ORDER BY PCVendor ASC';

																			$resultPCVendor = mysqli_query($con,$sqlPCVendor); 

																			while($row=mysqli_fetch_array($resultPCVendor)){

																			$PCVendor = strtoupper($row['PCVendor']);

																		?>
																		<option value='<?php echo $PCVendor; ?>'>

																	 <?php } ?>
																	</datalist>
													  </div>
													   <div class="col-md-3">
															      	<label># oF Needls/Probe:</label>
															      	<input type='number'class='form-control' name='needlecount' value='<?php echo $NeedleCount; ?>'></input>
													  </div>
													   <div class="col-md-3">
															      	<label>Gram Force:</label>
															      	<input type='text'class='form-control' name='gf' value='<?php echo $Gramforce; ?>'></input>
													  </div>
									        	</div>	
									        	<div class='row'>
									        		 <div class="col-md-3">
															      	<label>Probe Technology:</label>
															      	<input type='text'class='form-control' name='probetech' list='ProbeTechlist' value='<?php echo $ProbeTech; ?>'></input>
															      		<datalist id="ProbeTechlist">
																		<?php 
																			$sqlProbeTech = 'SELECT DISTINCT ProbeTech from hardwarews ORDER BY ProbeTech ASC';

																			$resultProbeTech = mysqli_query($con,$sqlProbeTech); 

																			while($row=mysqli_fetch_array($resultProbeTech)){

																			$ProbeTech = strtoupper($row['ProbeTech']);

																		?>
																		<option value='<?php echo $ProbeTech; ?>'>

																	 <?php } ?>
																	</datalist>
													  </div>
													  <div class="col-md-3">
															      	<label>Technology Type:</label>
															      	<input type='text'class='form-control' name='techtype' list='techtypelist' value='<?php echo $TechType; ?>'></input>
															      		<datalist id="techtypelist">
																		<?php 
																			$sqlTechType = 'SELECT DISTINCT TechType from hardwarews ORDER BY TechType ASC';

																			$resultTechType = mysqli_query($con,$sqlTechType); 

																			while($row=mysqli_fetch_array($resultTechType)){

																			$TechType = strtoupper($row['TechType']);

																		?>
																		<option value='<?php echo $TechType; ?>'>

																	 <?php } ?>
																	</datalist>
													  </div>
													   <div class="col-md-3">
															      	<label>Probe Depth:(um)</label>
															      	<input type='number'class='form-control' name='probedepth' value='<?php echo $ProbeDepth; ?>'></input>
													  </div>
													   <div class="col-md-3">
															      	<label>Elteso:</label>
															      	<input type='number'class='form-control' name='elteso' list='eltesolist' value='<?php echo $Elteso; ?>'></input>
															      	<datalist id="eltesolist">
																		<?php 
																			$sqlElteso = 'SELECT DISTINCT Elteso from hardwarews ORDER BY Elteso ASC';

																			$resultElteso = mysqli_query($con,$sqlElteso); 

																			while($row=mysqli_fetch_array($resultElteso)){

																			$Elteso = strtoupper($row['Elteso']);

																		?>
																		<option value='<?php echo $Elteso; ?>'>

																	 <?php } ?>
																	</datalist>
															     
													  </div>
													 
													  
									        	</div>	
									        	<div class='row'>
									        		  <div class="col-md-4">
															      	<label>Probe Needle Material:</label>
															      	<input type='text'class='form-control' name='needlemat' list='needlematlist' value='<?php echo $ProbeNeedleMat; ?>'></input>
															      		<datalist id="needlematlist">
																		<?php 
																			$sqlProbeNeedleMat = 'SELECT DISTINCT ProbeNeedleMat from hardwarews ORDER BY ProbeNeedleMat ASC';

																			$resultProbeNeedleMat = mysqli_query($con,$sqlProbeNeedleMat); 

																			while($row=mysqli_fetch_array($resultProbeNeedleMat)){

																			$ProbeNeedleMat = strtoupper($row['ProbeNeedleMat']);

																		?>
																		<option value='<?php echo $ProbeNeedleMat; ?>'>

																	 <?php } ?>
																	</datalist>
													  </div>
									        		 <div class="col-md-3">
															      	<label>Cleaning Material:</label>
															      	<input type='text'class='form-control' name='cleanmat' list='cleanmatlist' value='<?php echo $CleaningMat; ?>'></input>
															      		<datalist id="cleanmatlist">
																		<?php 
																			$sqlCleaningMat = 'SELECT DISTINCT CleaningMat from hardwarews ORDER BY CleaningMat ASC';

																			$resultCleaningMat = mysqli_query($con,$sqlCleaningMat); 

																			while($row=mysqli_fetch_array($resultCleaningMat)){

																			$CleaningMat = strtoupper($row['CleaningMat']);

																		?>
																		<option value='<?php echo $CleaningMat; ?>'>

																	 <?php } ?>
																	</datalist>
													  </div>
													 
													  
									        	</div>	
									        	<div class='row'>
									        			 <div class="col-md-3">
															      	<label>Wafer Type:</label>
															      	<input type='text'class='form-control' name='wafertype' list='wafertypelist' value='<?php echo $WaferType; ?>'></input>
															      		<datalist id="wafertypelist">
																		<?php 
																			$sqlWaferType = 'SELECT DISTINCT WaferType from hardwarews ORDER BY WaferType ASC';

																			$resultWaferType = mysqli_query($con,$sqlWaferType); 

																			while($row=mysqli_fetch_array($resultWaferType)){

																			$WaferType = strtoupper($row['WaferType']);

																		?>
																		<option value='<?php echo $WaferType; ?>'>

																	 <?php } ?>
																	</datalist>
													  </div>
									        		 <div class="col-md-3">
															      	<label>Probecard PN:</label>
															      	<input type='text'class='form-control' name='pcpn' value='<?php echo $ProbecardPN; ?>'></input>
													  </div>
									        		 <div class="col-md-2">
															      	<label>Set-up:</label>
															      	<select class="mdb-select md-form colorful-select dropdown-primary" name='setup'>
																	  <option value="" readonly>Select</option>
																	  <option value="overhead" <?php if($Setup=='overhead') echo 'selected';?>>Overhead</option>
																	  <option value="cable"  <?php if($Setup=='cable') echo 'selected';?>>Cable</option>
																	</select>
													  </div>
													  <div class="col-md-3">
															      	<label>Insertion:</label>
															      	<select class="mdb-select md-form colorful-select dropdown-primary" name='insertion'>
																	  <option value="" readonly>Select</option>
																	  <option value="ws1"  <?php if($Insertion=='ws1') echo 'selected';?>>WS1</option>
																	  <option value="ws2"  <?php if($Insertion=='ws2') echo 'selected';?>>WS2</option>
																	  <option value="ws1/ws2"  <?php if($Insertion=='ws1/ws2') echo 'selected';?>>WS1/WS2</option>
																	</select>
													  </div>
													 
													 
									        	</div>	
									        	<div class='row'>
									        		  <div class="col-md-3">
															      	<label>Probecard Qty:</label>
															      	<input type='text'class='form-control' name='pcqyt' value='<?php echo $ProbecardQty; ?>'></input>
													  </div>
									        		<div class="col-md-3">
															      	<label>Tester:</label>
															      	<input type='text'class='form-control' name='tester' value='<?php echo $Tester; ?>'></input>
													 </div>
									        		 <div class="col-md-3">
															      	<label>No. of Sites:</label>
															      	<input type='number'class='form-control' name='pcnoofsites' value='<?php echo $Sites; ?>'></input>
													  </div>
													  <div class="col-md-3">
															      	<label>Configuration:</label>
															      	<input type='text'class='form-control' name='pcconfig' value='<?php echo $Configuration; ?>'></input>
													  </div>
													 
									        	</div>		
									      </div>
									    </div>
									  </div>
									    <div class="card">
									    <div class="card-header" id="heading6">
									      <h5 class="mb-0">
									        <button type='button' class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapseThree">
									         Probe Card Qual Status  <i class="fa fa-angle-down"></i>
									        </button>
									      </h5>
									    </div>
									    <div id="collapse6" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
									      <div class="card-body">
									      	<div class='row'>
									        		<div class="col-md-3">
															      	<label>Qual Start Date:</label>
															      	
													  </div>

													  <div class="col-md-5">
															      <input type='Date'class='form-control' name='pcqsd' value='<?php echo $PCQSD; ?>'></input>
													  </div>
													  <div class="col-md-9" style='padding-top: 20px; '>
																<label>Is Probecard released in production (HMMS)?</label>
																<select class="mdb-select md-form colorful-select dropdown-primary" name='pchmms'>
																			<option value=""  >Select</option>
																			<option value="yes" <?php if ($PCHMMS=='yes') echo'selected'?>>Yes</option>
																			<option value="ongoing qual"  <?php if ($PCHMMS=='ongoing qual') echo'selected'?>>Ongoing Qual</option>
																</select>	
													  </div>
													  <div class="col-md-5">
																			<label>Probecard Status/Remarks?</label>
																			<textarea cols="50" rows="2" name='pcremarks'><?php echo $PCRemarks; ?></textarea>

																		
															      	
													   </div>
											</div>
									      </div>
									    </div>
									  </div>
