   <p>name:&nbsp;<input name="name" type="text" value="<?php echo isset($res) ? htmlentities($res['name'], ENT_QUOTES) : ''; ?>" required></p>
   <p>surname:&nbsp;<input name="surname" type="text" value="<?php echo isset($res) ? htmlentities($res['surname'], ENT_QUOTES) : ''; ?>" required></p>
   <p>phone:&nbsp;<input name="phone" type="text" value="<?php echo isset($res) ? htmlentities($res['phone'], ENT_QUOTES) : ''; ?>" required></p>
   <p>street:&nbsp;<input name="street" type="text" value="<?php echo isset($res) ? htmlentities($res['street'], ENT_QUOTES) : ''; ?>" required></p>
   <p>city:&nbsp;<input name="city" type="text" value="<?php echo isset($res) ? htmlentities($res['city'], ENT_QUOTES) : ''; ?>" required></p>
   <p>country:&nbsp;<input name="country" type="text" value="<?php echo isset($res) ? htmlentities($res['country'], ENT_QUOTES) : ''; ?>" required></p>
   <p><input type="submit"></p>
