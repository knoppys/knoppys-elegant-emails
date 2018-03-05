<?php
/*******************
Reason for emails
*******************/

//Email sent to applicant
function reason_jobapplication(){ ob_start(); ?>
		
	<div style="background-color:transparent;">
		<div class="block-grid" style="Margin: 0 auto;min-width: 320px;max-width: 600px;width: 600px;width: calc(29000% - 179200px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #00a9e0;">
			<div style="border-collapse: collapse;display: table;width: 100%;">
				<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 600px;"><tr class="layout-full-width" style="background-color:#00a9e0;"><![endif]-->
				<!--[if (mso)|(IE)]><td align="center" width="600" style=" width:600px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
				<div class="col num12" style="min-width: 320px;max-width: 600px;width: 600px;width: calc(28000% - 167400px);background-color: #00a9e0;">
					<div style="background-color: transparent; width: 100% !important;">
						<!--[if (!mso)&(!IE)]><!-->
						<div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
							<!--<![endif]-->
							<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><![endif]-->
							<div style="font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;color:#FFFFFF;line-height:120%; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">
								<div style="font-size:12px;line-height:14px;color:#FFFFFF;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;">
									<p style="margin: 0;font-size: 12px;line-height: 14px;text-align: center"><span style="font-size: 10px; line-height: 12px;"><span style="line-height: 12px; font-size: 10px;">You’re receiving this message because you applied for a role advertised via Hamblin Employment Group.&#160;<br>
									GDRP Options go here</span></span></p>
								</div>
							</div><!--[if mso]></td></tr></table><![endif]-->
							<!--[if (!mso)&(!IE)]><!-->
						</div><!--<![endif]-->
					</div>
				</div><!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
			</div>
		</div>
	</div>

<?php $content = ob_get_clean();
    return $content;

};


//Email sent to the office
function reason_new_jobapplication(){ ob_start(); ?>
		
	<div style="background-color:transparent;">
		<div class="block-grid" style="Margin: 0 auto;min-width: 320px;max-width: 600px;width: 600px;width: calc(29000% - 179200px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #00a9e0;">
			<div style="border-collapse: collapse;display: table;width: 100%;">
				<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 600px;"><tr class="layout-full-width" style="background-color:#00a9e0;"><![endif]-->
				<!--[if (mso)|(IE)]><td align="center" width="600" style=" width:600px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
				<div class="col num12" style="min-width: 320px;max-width: 600px;width: 600px;width: calc(28000% - 167400px);background-color: #00a9e0;">
					<div style="background-color: transparent; width: 100% !important;">
						<!--[if (!mso)&(!IE)]><!-->
						<div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
							<!--<![endif]-->
							<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><![endif]-->
							<div style="font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;color:#FFFFFF;line-height:120%; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">
								<div style="font-size:12px;line-height:14px;color:#FFFFFF;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;">
									<p style="margin: 0;font-size: 12px;line-height: 14px;text-align: center"><span style="font-size: 10px; line-height: 12px;"><span style="line-height: 12px; font-size: 10px;">You’re receiving this message because a new candidate has applied for a job via the Hamblin Employment Group Website.</span></span></p>
								</div>
							</div><!--[if mso]></td></tr></table><![endif]-->
							<!--[if (!mso)&(!IE)]><!-->
						</div><!--<![endif]-->
					</div>
				</div><!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
			</div>
		</div>
	</div>

<?php $content = ob_get_clean();
    return $content;

};

function reason_registration(){ ob_start(); ?>
		
	<div style="background-color:transparent;">
		<div class="block-grid" style="Margin: 0 auto;min-width: 320px;max-width: 600px;width: 600px;width: calc(29000% - 179200px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #00a9e0;">
			<div style="border-collapse: collapse;display: table;width: 100%;">
				<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 600px;"><tr class="layout-full-width" style="background-color:#00a9e0;"><![endif]-->
				<!--[if (mso)|(IE)]><td align="center" width="600" style=" width:600px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
				<div class="col num12" style="min-width: 320px;max-width: 600px;width: 600px;width: calc(28000% - 167400px);background-color: #00a9e0;">
					<div style="background-color: transparent; width: 100% !important;">
						<!--[if (!mso)&(!IE)]><!-->
						<div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
							<!--<![endif]-->
							<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><![endif]-->
							<div style="font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;color:#FFFFFF;line-height:120%; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">
								<div style="font-size:12px;line-height:14px;color:#FFFFFF;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;">
									<p style="margin: 0;font-size: 12px;line-height: 14px;text-align: center"><span style="font-size: 10px; line-height: 12px;"><span style="line-height: 12px; font-size: 10px;">You’re receiving this message because you registered for an account with Hamblin Employment Group.&#160;<br>
									If you did not register for this account, please contact us on 00 44 1624 640 420</span></span></p>
								</div>
							</div><!--[if mso]></td></tr></table><![endif]-->
							<!--[if (!mso)&(!IE)]><!-->
						</div><!--<![endif]-->
					</div>
				</div><!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
			</div>
		</div>
	</div>

<?php $content = ob_get_clean();
    return $content;

};

function reason_passwordreset(){ ob_start(); ?>
		
	<div style="background-color:transparent;">
		<div class="block-grid" style="Margin: 0 auto;min-width: 320px;max-width: 600px;width: 600px;width: calc(29000% - 179200px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #00a9e0;">
			<div style="border-collapse: collapse;display: table;width: 100%;">
				<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 600px;"><tr class="layout-full-width" style="background-color:#00a9e0;"><![endif]-->
				<!--[if (mso)|(IE)]><td align="center" width="600" style=" width:600px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
				<div class="col num12" style="min-width: 320px;max-width: 600px;width: 600px;width: calc(28000% - 167400px);background-color: #00a9e0;">
					<div style="background-color: transparent; width: 100% !important;">
						<!--[if (!mso)&(!IE)]><!-->
						<div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
							<!--<![endif]-->
							<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><![endif]-->
							<div style="font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;color:#FFFFFF;line-height:120%; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">
								<div style="font-size:12px;line-height:14px;color:#FFFFFF;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;">
									<p style="margin: 0;font-size: 12px;line-height: 14px;text-align: center"><span style="font-size: 10px; line-height: 12px;"><span style="line-height: 12px; font-size: 10px;">You’re receiving this message because you requested a password reset for your account with Hamblin Employment Group.&#160;<br></span></span></p>
								</div>
							</div><!--[if mso]></td></tr></table><![endif]-->
							<!--[if (!mso)&(!IE)]><!-->
						</div><!--<![endif]-->
					</div>
				</div><!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
			</div>
		</div>
	</div>

<?php $content = ob_get_clean();
    return $content;

};

function reason_newuser(){ ob_start(); ?>
		
	<div style="background-color:transparent;">
		<div class="block-grid" style="Margin: 0 auto;min-width: 320px;max-width: 600px;width: 600px;width: calc(29000% - 179200px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #00a9e0;">
			<div style="border-collapse: collapse;display: table;width: 100%;">
				<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 600px;"><tr class="layout-full-width" style="background-color:#00a9e0;"><![endif]-->
				<!--[if (mso)|(IE)]><td align="center" width="600" style=" width:600px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
				<div class="col num12" style="min-width: 320px;max-width: 600px;width: 600px;width: calc(28000% - 167400px);background-color: #00a9e0;">
					<div style="background-color: transparent; width: 100% !important;">
						<!--[if (!mso)&(!IE)]><!-->
						<div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
							<!--<![endif]-->
							<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><![endif]-->
							<div style="font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;color:#FFFFFF;line-height:120%; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">
								<div style="font-size:12px;line-height:14px;color:#FFFFFF;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;">
									<p style="margin: 0;font-size: 12px;line-height: 14px;text-align: center"><span style="font-size: 10px; line-height: 12px;"><span style="line-height: 12px; font-size: 10px;">You’re receiving this message because you registered for an account with Hamblin Employment Group. If you did not register for this account please contact us <a href="http://www.greenfield-it.co.uk/contact-us">here</a>&#160;<br></span></span></p>
								</div>
							</div><!--[if mso]></td></tr></table><![endif]-->
							<!--[if (!mso)&(!IE)]><!-->
						</div><!--<![endif]-->
					</div>
				</div><!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
			</div>
		</div>
	</div>

<?php $content = ob_get_clean();
    return $content;

};

function reason_new_talent_form(){ ob_start(); ?>
		
	<div style="background-color:transparent;">
		<div class="block-grid" style="Margin: 0 auto;min-width: 320px;max-width: 600px;width: 600px;width: calc(29000% - 179200px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #00a9e0;">
			<div style="border-collapse: collapse;display: table;width: 100%;">
				<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 600px;"><tr class="layout-full-width" style="background-color:#00a9e0;"><![endif]-->
				<!--[if (mso)|(IE)]><td align="center" width="600" style=" width:600px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
				<div class="col num12" style="min-width: 320px;max-width: 600px;width: 600px;width: calc(28000% - 167400px);background-color: #00a9e0;">
					<div style="background-color: transparent; width: 100% !important;">
						<!--[if (!mso)&(!IE)]><!-->
						<div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
							<!--<![endif]-->
							<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><![endif]-->
							<div style="font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;color:#FFFFFF;line-height:120%; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">
								<div style="font-size:12px;line-height:14px;color:#FFFFFF;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;">
									<p style="margin: 0;font-size: 12px;line-height: 14px;text-align: center"><span style="font-size: 10px; line-height: 12px;"><span style="line-height: 12px; font-size: 10px;">You’re receiving this message because an employer has completed the talent form on the Hamblin Employment Group website.</span></span></p>
								</div>
							</div><!--[if mso]></td></tr></table><![endif]-->
							<!--[if (!mso)&(!IE)]><!-->
						</div><!--<![endif]-->
					</div>
				</div><!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
			</div>
		</div>
	</div>

<?php $content = ob_get_clean();
    return $content;

};

function reason_jobalert(){ ob_start(); ?>
		
	<div style="background-color:transparent;">
		<div class="block-grid" style="Margin: 0 auto;min-width: 320px;max-width: 600px;width: 600px;width: calc(29000% - 179200px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #00a9e0;">
			<div style="border-collapse: collapse;display: table;width: 100%;">
				<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 600px;"><tr class="layout-full-width" style="background-color:#00a9e0;"><![endif]-->
				<!--[if (mso)|(IE)]><td align="center" width="600" style=" width:600px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
				<div class="col num12" style="min-width: 320px;max-width: 600px;width: 600px;width: calc(28000% - 167400px);background-color: #00a9e0;">
					<div style="background-color: transparent; width: 100% !important;">
						<!--[if (!mso)&(!IE)]><!-->
						<div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
							<!--<![endif]-->
							<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><![endif]-->
							<div style="font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;color:#FFFFFF;line-height:120%; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">
								<div style="font-size:12px;line-height:14px;color:#FFFFFF;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;">
									<p style="margin: 0;font-size: 12px;line-height: 14px;text-align: center"><span style="font-size: 10px; line-height: 12px;"><span style="line-height: 12px; font-size: 10px;">You’re receiving this message because you registered for job alerts with Hamblin Employment Group. If you did not register for this account please contact us <a href="http://www.greenfield-it.co.uk/contact-us">here</a>&#160;<br></span></span></p>
								</div>
							</div><!--[if mso]></td></tr></table><![endif]-->
							<!--[if (!mso)&(!IE)]><!-->
						</div><!--<![endif]-->
					</div>
				</div><!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
			</div>
		</div>
	</div>

<?php $content = ob_get_clean();
    return $content;

};