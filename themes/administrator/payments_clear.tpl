		<div class="middle" id="anchor-content">
            <div id="page:main-container">
				<div class="columns ">
                
					<div class="side-col" id="page:left">
    					<h3>Payments</h3>
						
                        <ul id="isoft" class="tabs">
                        	<li >
                                <a href="payments_manage.php" id="isoft_group_2" name="group_2" title="Manage Payments" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Manage Payments
                                    </span>
                                </a>
                                <div id="isoft_group_2_content" style="display:none;"></div>
                            </li>
                            
                            <li >
                                <a href="payments_featured.php" id="isoft_group_3" name="group_3" title="Feature Gig Payments" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Feature Gig Payments
                                    </span>
                                </a>
                                <div id="isoft_group_3_content" style="display:none;"></div>
                            </li>
                            
    						<li >
        						<a href="payments_clear.php" id="isoft_group_1" name="group_1" title="Clear Payments" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Clear Payments
                                    </span>
        						</a>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <div id="isoft_group_1_content" style="display:none;">
                                	<div class="entry-edit">
                                        <div class="entry-edit-head">
                                            <h4 class="icon-head head-edit-form fieldset-legend">Clear Payments</h4>
                                            <div class="form-buttons">

                                            </div>
                                    	</div>

                                        <div>
        			<div id="customerGrid">
        				<table cellspacing="0" class="actions">
        				<tr>
                    		<td class="pager">
                            	Showing {if $total gt 0}{$beginning} - {$ending} of {/if}{$total} Payments
                    		</td>
                			<td class="export a-right"></td>
            				<td class="filter-actions a-right">
                            	<button  id="id_ffba3971e132ae3d78c160244ea09b39" type="button" class="scalable " onclick="document.location.href='payments_clear.php'" style=""><span>Reset Filter</span></button>
            					<button  id="id_56a0b03bf0b3be131176f3243cc289ff" type="button" class="scalable task" onclick="document.main_form.submit();" style=""><span>Search</span></button>        
                            </td>
        				</tr>
    					</table>
                        
                        <div class="grid">
							<div class="hor-scroll">
								<table cellspacing="0" class="data" id="customerGrid_table">
                                <col  width="120" />
                                <col  width="100"  />
                                <col  width="150"  />
                                <col  width="150"  />
                                <col  width="300"  />
                                <col  width="100"  />
                                <col   />
	    	    	        	<thead>
	            	                <tr class="headings">
                                        <th ><span class="nobr"><a href="payments_clear.php?page={$currentpage}&sortby=ID&sorthow={if $sortby eq "ID"}{if $sorthow eq "desc"}asc{else}desc{/if}{else}{$sorthow}{/if}{if $search eq "1"}&fromid={$fromid}&toid={$toid}&title={$title}&OID={$OID}&username={$username}&PAYPAL={$PAYPAL}{/if}" name="id" class="{if $sortby eq "ID"}sort-arrow-{if $sorthow eq "desc"}desc{else}asc{/if}{else}not-sort{/if}"><span class="sort-title">ID</span></a></span></th>
                                        <th ><span class="nobr"><a href="payments_clear.php?page={$currentpage}&sortby=OID&sorthow={if $sortby eq "OID"}{if $sorthow eq "desc"}asc{else}desc{/if}{else}{$sorthow}{/if}{if $search eq "1"}&fromid={$fromid}&toid={$toid}&title={$title}&OID={$OID}&username={$username}&PAYPAL={$PAYPAL}{/if}" name="OID" class="{if $sortby eq "OID"}sort-arrow-{if $sorthow eq "desc"}desc{else}asc{/if}{else}not-sort{/if}"><span class="sort-title">Order ID</span></a></span></th>
                                        <th ><span class="nobr"><a href="payments_clear.php?page={$currentpage}&sortby=username&sorthow={if $sortby eq "username"}{if $sorthow eq "desc"}asc{else}desc{/if}{else}{$sorthow}{/if}{if $search eq "1"}&fromid={$fromid}&toid={$toid}&title={$title}&OID={$OID}&username={$username}&PAYPAL={$PAYPAL}{/if}" name="username" class="{if $sortby eq "username"}sort-arrow-{if $sorthow eq "desc"}desc{else}asc{/if}{else}not-sort{/if}"><span class="sort-title">Seller</span></a></span></th>
                                        <th ><span class="nobr"><a href="payments_clear.php?page={$currentpage}&sortby=time&sorthow={if $sortby eq "time"}{if $sorthow eq "desc"}asc{else}desc{/if}{else}{$sorthow}{/if}{if $search eq "1"}&fromid={$fromid}&toid={$toid}&title={$title}&OID={$OID}&username={$username}&PAYPAL={$PAYPAL}{/if}" name="time" class="{if $sortby eq "time"}sort-arrow-{if $sorthow eq "desc"}desc{else}asc{/if}{else}not-sort{/if}"><span class="sort-title">Payment Date</span></a></span></th>
                                        <th ><span class="nobr"><a href="payments_clear.php?page={$currentpage}&sortby=PAYPAL&sorthow={if $sortby eq "PAYPAL"}{if $sorthow eq "desc"}asc{else}desc{/if}{else}{$sorthow}{/if}{if $search eq "1"}&fromid={$fromid}&toid={$toid}&title={$title}&OID={$OID}&username={$username}&PAYPAL={$PAYPAL}{/if}" name="PAYPAL" class="{if $sortby eq "PAYPAL"}sort-arrow-{if $sorthow eq "desc"}desc{else}asc{/if}{else}not-sort{/if}"><span class="sort-title">Payment Method</span></a></span></th>
                                        <th  class=" no-link"><span class="nobr">Price</span></th>
                                        <th  class=" no-link last"><span class="nobr">Action</span></th>
	                	            </tr>
	            	            	<tr class="filter">
                                        <th >
                                            <div class="range">
                                                <div class="range-line">
                                                    <span class="label">From:</span> 
                                                    <input type="text" name="fromid" id="fromid" value="{$fromid}" class="input-text no-changes"/>
                                                </div>
                                                <div class="range-line">
                                                    <span class="label">To : </span>
                                                    <input type="text" name="toid" id="toid" value="{$toid}" class="input-text no-changes"/>
                                                </div>
                                            </div>
                                        </th>
                                        <th ><input type="text" name="OID" id="OID" value="{$OID|stripslashes}" class="input-text no-changes"/></th>
                                        <th ><input type="text" name="username" id="username" value="{$username|stripslashes}" class="input-text no-changes"/></th>
                                        <th></th>
                                        <th ></th>
                                        <th ></th>
                                        <th  class=" no-link last">
                                            <div style="width: 100%;">&nbsp;</div>
                                        </th>
	                	            </tr>
	            	        	</thead>
	    	    	    		<tbody>
                                	{section name=i loop=$results}
                                    {insert name=get_days_withdraw value=a assign=wd t=$results[i].cltime}
                                    {if $wd eq "0"}
                                    
                                    
                                    {if $results[i].IID GT "0"}
                                    {insert name=get_ctp value=a assign=myctp IID=$results[i].IID}
                                    {insert name=get_yprice value=a assign=paysel p=$results[i].price c=$myctp}
                                    {else}
                                    {if $results[i].price eq $results[i].price2}
                                    {insert name=get_yprice value=a assign=paysel p=$results[i].price c=$results[i].ctp2}
                                    {elseif $results[i].price eq $results[i].price3}
                                    {insert name=get_yprice value=a assign=paysel p=$results[i].price c=$results[i].ctp3}
                                    {else}
                                    {insert name=get_yprice value=a assign=paysel p=$results[i].price c=$results[i].ctp}
                                    {/if}
                                	{/if}
                                
                                
                                
                                    <tr id="" >
                                        <td align="center">{$results[i].ID}</td>
                                        <td class=" " align="center"><a href="{$adminurl}/orders_manage.php?page=1&sortby=OID&sorthow=desc&fromid={$results[i].OID}&toid={$results[i].OID}">{$results[i].OID}</a></td>
                                        <td align="center">{$results[i].username|stripslashes|truncate:20:"...":true}</td>
                                        <td align="center">{$results[i].time|date_format:"%b %e, %Y"}</td>
                                        <td class=" " style="background-color:#FFC">
                                        	<b>
                                            {if $results[i].fiverrscriptdotcom_local eq "1"}
                                            	Local Bank Payment
                                            {elseif $results[i].fiverrscriptdotcom_available eq "1"}
                                            	Available Balance
                                            {else}
                                                {if $results[i].PAYPAL GT "0"}
                                                {insert name=get_trans_id value=a assign=pa id=$results[i].PAYPAL}
                                                {if $pa[0].memo eq "alertpay"}AlertPay{else}PayPal{/if} (Transaction ID: {$pa[0].txn_id})
                                                {else}
                                                Account Balance
                                                {/if}
                                            {/if}
                                            </b>
                                        </td>
                                        <td>${$results[i].price}</td>
                                        <td class=" last">
                                        	<form name="a{$results[i].ID}" id="a{$results[i].ID}" action="" method="post">
                                            <input type="hidden" name="AID" value="{$results[i].ID}" />
                                            <input type="hidden" name="asub" value="1" />
                                            <input type="hidden" name="aseller" value="{$results[i].seller}" />
                                            <input type="hidden" name="apay" value="{$paysel}" />
                                            </form>
                                        	<a href="javascript: document.a{$results[i].ID}.submit();">Clear Payment</a> (${$paysel} will be debited to the Seller's account)
                                        </td>
                                	</tr>
                                    {/if}
                                    {/section}
                                    <tr>
                                    	<td colspan="7">
                                        {$pagelinks}
                                        </td>
                                    </tr>
	    	    	    		</tbody>
								</table>
                            </div>
                        </div>
					</div>
				</div>
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
                               <h3 class="icon-head head-products">Payments - Clear Payments</h3>
                            </div>
                            
                            <form action="payments_clear.php" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div>