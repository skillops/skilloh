						{section name=i loop=$posts}
                        {insert name=seo_clean_titles assign=title value=a title=$posts[i].gtitle}
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 animation-element animated{if $smarty.section.i.iteration % 4 == 0}last{/if}">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 songperson z_padding0">
                            	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 product_top_rate">
	                            	<ul>
	                                   {insert name=scriptolution_rating_stars assign=scriptolutionstars value=a scriptolutionuserid=$posts[i].USERID}{$scriptolutionstars}
	                                </ul>
	                            	{if $posts[i].feat eq "1"}<span class="featured ">{$lang526}</span>{/if}
	                                {if $posts[i].toprated eq "1"}<span class="rated">{$lang525}</span>{/if}
	                                {if $posts[i].youtube ne ""}{include file="scriptolution_bit_yt_small.tpl"}{/if}
	                                {if $posts[i].days eq "0"}{include file='scriptolution_bit_instant.tpl'}{elseif $posts[i].days eq "1"}{include file='scriptolution_bit_express.tpl'}{/if}
                              	</div>  
                            	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0">	
                            		<a href="{$baseurl}/{$posts[i].seo|stripslashes}/{$posts[i].PID|stripslashes}/{$title}">
                            			<img src="{$purl}/t3/{$posts[i].p1}" alt="{$posts[i].gtitle|stripslashes}" class="img-responsive" />
                            		</a>
                             	</div>
                             <!--<div class="price">
                             		{if $scriptolution_cur_pos eq "1"}{$posts[i].price|stripslashes}{$lang197}{else}{$lang197}{$posts[i].price|stripslashes}{/if}
                             </div>-->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 name_job">	
	                            <p>
	                            	<a href="{$baseurl}/{$posts[i].seo|stripslashes}/{$posts[i].PID|stripslashes}/{$title}">{$lang62} {$posts[i].gtitle|stripslashes|mb_truncate:90:"...":'UTF-8'}</a>
	                            </p>
                            </div>                    
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 userdata">        
                            	{insert name=get_member_profilepicture assign=profilepicture value=var USERID=$posts[i].USERID}
                                                       
                                <!--<div class="userimg">
                                		<a href="{$baseurl}/{insert name=get_seo_profile value=a username=$posts[i].username|stripslashes}">
                                			<img width="25px" height="25px" src="{$membersprofilepicurl}/thumbs/{$profilepicture}" alt="{$posts[i].username|stripslashes}" />
                                		</a>
                                </div>-->
                                <p class="username">
                                	<span>{$lang414}</span> <a href="{$baseurl}/{insert name=get_seo_profile value=a username=$posts[i].username|stripslashes}">{$posts[i].username|stripslashes|truncate:20:"...":true}</a>
                                </p>
                                <div class="otherdetails">
                                    <span class="usercount"></span>
                                    <div class="price">
                                    	{if $scriptolution_cur_pos eq "1"}{$posts[i].price|stripslashes}<sup>{$lang197}</sup>{else}<sup>{$lang197}</sup>{$posts[i].price|stripslashes}{/if}
                                    </div>
                           
                                    <!--<ul>
                                    	{insert name=scriptolution_rating_stars assign=scriptolutionstars value=a scriptolutionuserid=$posts[i].USERID}{$scriptolutionstars}
                                    </ul>-->
                                    <!--<span class="flag">
                                    		<span class="country {$posts[i].country}" title="{insert name=country_code_to_country value=a assign=userc code=$posts[i].country}{$userc}"></span>
                                    </span>-->
                                    <div class="clear"></div>
                                </div>
                            </div>                                
                            </div>                            
                        </div>
                        {/section}