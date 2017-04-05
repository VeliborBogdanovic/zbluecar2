<div class="col-md-12" style="z-index: 100;">
<?php 
                           $i=1;?>

                    <div class="table">
                    <table class="table" id="modify_table">
    <thead>
                        <tr>
                            <th class="center"></th>
                            <th class="center">Username</th>
                            <th class="center">Email</th>
                            <th class="center">Role</th>
                            
                        </tr>
    </thead>
    <tbody>
                            <?php foreach($users as $u){?>
                        <tr>
                            <td class="center">
                                 <?php echo $i;?>
                            </td>
                            <td class="center">
                               <?php echo $u->username?>
                            </td>
                            
                            <td class="center">
                                <?php echo $u->email?>
                               
                            </td>
                            <td class="center">
                                <?php echo $u->role?>
                               
                            </td>
                            <td class="center">
                                 
                                 <a href="javascript:formodify('users',<?php echo $i?>);"><b style="color:green;">Modify</b></a>
                                
                            </td>
                            <td class="center">
                                <a href="javascript:deletee('users',<?php echo $u->id_user;?>);"><b style="color:red;">Delete</b></a>
                            </td>
                            <td class="hidden">
                                <?php echo $u->id_role ?>
                            </td>
                            <td class="hidden">
                                <?php echo $u->id_user ?>
                            </td>
                        </tr>
                        
                       <?php $i++; }?>
    <tbody>
                    </table>
                        <h4>Add new user</h4>
                        <input id="Username" placeholder="Username.." type="text"/>
                        <input id="Pass" placeholder="Password..." type="password"/>
                        <input id="Email" placeholder="Email.." type="text"/>
                        <select class='form-control' id="RolesDDL">
                         
                            <option value='<?php echo $users[0]->id_role ?>'><?php echo $users[0]->role ?></option>
                            <option value='<?php echo $users[1]->id_role ?>'><?php echo $users[1]->role ?></option>
                            
                        </select>
                        <h4><a href="javascript:add('users');" class="success"><b style="color:green;" class='center'>Add </b></a><h4>
                        <div height="800px" ></div>
                        <div>
                            
                    </div>
