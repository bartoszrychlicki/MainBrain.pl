<% include Menu2 %>
 
<div id="Content" class="typography">
    <% include Breadcrumbs %>
    $Content
     
    <ul id="StaffList">
        <% control Children %>
        <li>
            <div class="staffname">$Title</div>
            <div class="staffphoto">$Photo.SetWidth(250)</div>
            <div class="staffdescription"><p>$Content</p></div>
        </li>
        <% end_control %>
    </ul>
</div>