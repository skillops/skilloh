{if $g.scriptolution_add_multiple GT "0"} {literal}
<style>
    .multipleoption {
        font-size: 20px !important;
        padding: 0;
        margin: 0
    }
    
    .showmultiple {
        color: #464646;
        margin-top: 20px;
        padding: 10px 15px !important;
    }
    
    .multipleping-selection-form {
        margin-top: 5px !important;
    }
    
    .multipleping-settings {
        font-size: 16px;
        letter-spacing: -0.04em;
        line-height: 30px
    }
</style>
{/literal}
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 showmultiple">
        <div id="multiplemore" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
            <div id="multipleping" class="multipleping-selection-form col-lg-12 col-md-12 col-sm-12 col-xs-12  ">
                <div class="multipleping-settings">
                    {$lang484}
                    <select id="multiplemax" name="multiplemax">
                        {section name=i start=1 loop=26}
                        <option value="{$smarty.section.i.index}" {if $g.scriptolution_add_multiple eq $smarty.section.i.index}selected{/if}>{$smarty.section.i.index}</option>
                        {/section}
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
{/if}