<div id="phaser" class="wrap options">
	<form action="options.php" method="post">

	<?php
	  settings_fields( 'phaser' );
	  do_settings_sections( 'phaser' );
	?>

	<h1>Lol I'm an Options Page</h1>
	<pre>
		               
            .':::::::'/.
       ___ /:::::::::::\____ _            _.''_
    /||   ||`.______.-`||   | |\_\\\\____/_ _.-'\\\\
.|-| ||===||           ||===| ||_||||____|_| .-'|||||
'|-| ||===||===========||===| ||_||||____|_|`-._|||||
    \||___||___________||___|_|/ ////       `-._////
     )      )  _____  (
    /`--.._/ .'| (  '. \
    )     ( (  './    ) )
   /`--.___\ '._____.' /
   )       /'._______.' 
  /`--..__/
  )       )
 /`--..__/
(        )
 `------'
	</pre>
	<table>
	     
		<tr>
			<th>Input a Hexidecimal color string for SVG Fill</th>
		</tr>
	    <tr>
	        <td><input type="text" placeholder="Hex Color" name="phaser_fill_hex" value="<?php echo esc_attr( get_option('phaser_fill_hex') ); ?>" size="50" /></td>
	    </tr>
		<tr>
			<th>Input a Hexidecimal color string for SVG Stroke ( probably looks better empty )</th>
		</tr>
	    <tr>
	        <td><input type="text" placeholder="Hex Color" name="phaser_stroke_hex" value="<?php echo esc_attr( get_option('phaser_stroke_hex') ); ?>" size="50" /></td>
	    </tr>

	    <tr>
	        <th>Enable SVG creation on Upload</th>
	    </tr>
	    <tr>
	        <td>
	            <label>
	                <input type="checkbox" name="phaser_create_svg_bool" <?php echo esc_attr( get_option('phaser_create_svg_bool') ) == 'on' ? 'checked="checked"' : ''; ?> />Yes</label><br/>
	        </td>
	    </tr>
	     <tr>
	        <th>Show SVGs as loader placeholders</th>
	    </tr>
	     <tr>
	        <td>
	            <label>
	                <input type="checkbox" name="phaser_show_svg_bool" <?php echo esc_attr( get_option('phaser_show_svg_bool') ) == 'on' ? 'checked="checked"' : ''; ?> />Yes</label><br/>
	        </td>
	    </tr>

	    <tr>
	        <td><?php submit_button(); ?></td>
	    </tr>

	</table>

	</form>
</div>