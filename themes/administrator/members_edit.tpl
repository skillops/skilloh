		<div class="middle" id="anchor-content">
            <div id="page:main-container">
				<div class="columns ">
                
					<div class="side-col" id="page:left">
    					<h3>Members</h3>
						
                        <ul id="isoft" class="tabs">
    						<li >
        						<a href="members_manage.php" id="isoft_group_1" name="group_1" title="Manage Members" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Manage Members
                                    </span>
        						</a>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <div id="isoft_group_1_content" style="display:none;">
                                	<div class="entry-edit">
                                        <div class="entry-edit-head">
                                            <h4 class="icon-head head-edit-form fieldset-legend">Edit Member</h4>
                                            <div class="form-buttons">

                                            </div>
                                    	</div>

                                        <fieldset id="group_fields4">
                                            <div class="hor-scroll">
                                                <table cellspacing="0" class="form-list">
                                                <tbody>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Member ID </label></td>
                                                        <td class="value">
                                                        	{$member.USERID}
                                                        </td>
                                                        <td class="scope-label"></td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Username </label></td>
                                                        <td class="value">
                                                        	<input id="username" name="username" value="{$member.username|stripslashes}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[USERNAME OF THE MEMBER]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">E-Mail </label></td>
                                                        <td class="value">
                                                        	<input id="email" name="email" value="{$member.email|stripslashes}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[EMAIL ADDRESS OF THE MEMBER]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Paypal E-Mail </label></td>
                                                        <td class="value">
                                                        	<input id="pemail" name="pemail" value="{$member.pemail|stripslashes}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[PAYPAL EMAIL ADDRESS OF THE MEMBER]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Full Name </label></td>
                                                        <td class="value">
                                                        	<input id="fullname" name="fullname" value="{$member.fullname|stripslashes}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[FULL NAME OF THE MEMBER]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">About Me </label></td>
                                                        <td class="value">
                                                        	<textarea id="vdescription" name="vdescription" class=" textarea" type="textarea" >{$member.description|stripslashes}</textarea>
                                                        </td>
                                                        <td class="scope-label">[DESCRIPTION OF THE MEMBER]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="scriptolutionuserslogan">Profile Slogan </label></td>
                                                        <td class="value">
                                                        	<input id="scriptolutionuserslogan" name="scriptolutionuserslogan" value="{$member.scriptolutionuserslogan|stripslashes}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[PROFILE SLOGAN OF THE MEMBER, SHOWN ON MEMBER PROFILE PAGE]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Date Joined </label></td>
                                                        <td class="value">
                                                        	{$member.addtime|date_format:"%b %e, %Y"}
                                                        </td>
                                                        <td class="scope-label"></td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Last Login </label></td>
                                                        <td class="value">
                                                        	{$member.lastlogin|date_format:"%b %e, %Y"}
                                                        </td>
                                                        <td class="scope-label"></td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Verified E-Mail </label></td>
                                                        <td class="value">
                                                        	<select name="verified" id="verified">
                                                            <option value="1" {if $member.verified eq 1}selected{/if}>Yes</option>
                                                            <option value="0" {if $member.verified eq 0}selected{/if}>No</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[CONFIRMED E-MAIL ADDRESS]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Active </label></td>
                                                        <td class="value">
                                                        	<select name="status" id="status">
                                                            <option value="1" {if $member.status eq 1}selected{/if}>Yes</option>
                                                            <option value="0" {if $member.status eq 0}selected{/if}>No</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[ACTIVE MEMBER ACCOUNT]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">New Password </label></td>
                                                        <td class="value">
                                                        	<input id="newpass2" name="newpass2" value="" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[ONLY FILL THIS OUT IF YOU WISH TO CHANGE THE MEMBER'S CURRENT PASSWORD]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Signup IP </label></td>
                                                        <td class="value">
                                                        	{$member.ip}
                                                        </td>
                                                        <td class="scope-label"></td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Last IP </label></td>
                                                        <td class="value">
                                                        	{$member.lip}
                                                        </td>
                                                        <td class="scope-label"></td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Balance </label></td>
                                                        <td class="value">
                                                        	<input id="funds" name="funds" value="{$member.funds|stripslashes}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[MEMBER ACCOUNT BALANCE]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="level">LEVEL </label></td>
                                                        <td class="value">
                                                        	<select name="level" id="level">
                                                            <option value="1" {if $member.level eq 1}selected{/if}>1</option>
                                                            <option value="2" {if $member.level eq 2}selected{/if}>2</option>
                                                            <option value="3" {if $member.level eq 3}selected{/if}>3</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[JOB LEVEL THE MEMBER HAS ACHIEVED]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                            </div>
                                            <input type="hidden" name="scriptolutiontoken" value="{$scriptolutiontoken}" />
                                        </fieldset>
									</div>
								</div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                               
                                
                                
                                
    						</li>
    
						</ul>
                        
						<script type="text/javascript">
                            isoftJsTabs = new varienTabs('isoft', 'main_form', 'isoft_group_1', []);
                        </script>
                        
					</div>
                    
					<div class="main-col" id="content">
						<div class="main-col-inner">
							<div id="messages">
                            {if $message ne "" OR $error ne ""}
                            	{include file="administrator/show_message.tpl"}
                            {/if}
                            </div>

                            <div class="content-header">
                               <h3 class="icon-head head-products">Members - Edit Member</h3>
                               <p class="content-buttons form-buttons">
                                    <button  id="id_be616be1324d8ae4516f276d17d34b9c" type="button" class="scalable save" onclick="document.main_form.submit();" style=""><span>Save Changes</span></button>			
                                </p>
                            </div>
                            
                            <form action="members_edit.php?USERID={$USERID}" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div>