<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <!-- Left Section -->
        <div class="left">
            <div class="image-info">
                <img src="#" alt="Item Image">
                <div class="info">
                    <div>Level:<span class="variable" id="level"></span></div>
                    <div>Rarity:<span class="variable" id="rarity"></span></div>
                    <div>Name:<span class="variable" id="name"></span></div>
                </div>
            </div>
            <div class="base-stat">BASE_STAT: <span class="variable" id="base_stat"></span></div>
            <table>
                <tr>
                    <td>Cool_down</td>
                    <td><span class="variable" id="cooldown"></span></td>
                </tr>
                <tr>
                    <td>Duration</td>
                    <td><span class="variable" id="duration"></span></td>
                </tr>
                <tr>
                    <td>Radius</td>
                    <td><span class="variable" id="radius"></span></td>
                </tr>
                <tr>
                    <td>Range</td>
                    <td><span class="variable" id="range"></span></td>
                </tr>
                <tr>
                    <td>Projectile_speed</td>
                    <td><span class="variable" id="projectile_speed"></span></td>
                </tr>
                <tr>
                    <td>Crit_hit_chance</td>
                    <td><span class="variable" id="crit_hit_chance"></span></td>
                </tr>
                <tr>
                    <td>Crit_hit_mult</td>
                    <td><span class="variable" id="crit_hit_mult"></span></td>
                </tr>
            </table>
        </div>

        <!-- Right Section -->
        <div class="right">
            <div class="form-group">
                <label for="item_type">Item Type:</label>
                <select id="item_type">
                    <option class="item_type_selected" value="default" selected> Choose an option</option>
                    <option class="item_type_selected" id="weapon" value="weapon">Weapon (red)</option>
                    <option class="item_type_selected" id="passive" value="passive">Passive (blue)</option>
                    <option class="item_type_selected" id="utility" value="utility">Utility (yellow)</option>
                    <option class="item_type_selected" id="healing" value="healing">Healing (green)</option>
                    <option class="item_type_selected" id="support" value="support">Support (teal)</option>
                </select>
            </div>
            <div class="form-group">
                <label for="item_rarity">Item Rarity:</label>
                <select id="item_rarity">
                    <option class="item_rarity_selected" value="default" selected> Choose an option</option>
                    <option class="item_rarity_selected" id="common" value="common">Common</option>
                    <option class="item_rarity_selected" id="uncommon" value="uncommon">Uncommon</option>
                    <option class="item_rarity_selected" id="rare" value="rare">Rare</option>
                    <option class="item_rarity_selected" id="epic" value="epic">Epic</option>
                    <option class="item_rarity_selected" id="legendary" value="legendary">Legendary</option>
                </select>
            </div>
            <div class="form-group">
                <label for="item_name">Item Name:</label>
                <select id="item_name">
                    <option class="item_name_selected" value="default" selected>Choose an option</option>
                    <?php
                        $item_name = ['standard_cannon','blast_cannon','sniper_cannon','explosive_cannon','galting_gun','carronade','grenade_launcher','standard_mortar','long_range_mortar','ballpark_mortar','big_berta',
                        'standard_torpedo','big_torpedo','swift_torpedo','triple_torpedo','railgun','missile_launcher','multi_missile','mine','flare_gun','napalm_launcher','fire_bomb','standard_shield',
                        'big_shield','turbo','bandage','big_bandage','overboost','nitro','tesla_bolt','tesla_shield','frost_blaster','frost_launcher','repair_box_launcher','repair_pulse','duct_tape',
                        'repair_bolt','repair_plasma','defence_wall','defence_aura','bloster_armor','cleanse_pulse'];
                        foreach ($item_name as $name) {
                            echo "<option class='item_name_selected' id='$name' value='$name'>".ucfirst(str_replace('_', ' ',$name))."</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="item_level">Item Level:</label>
                <input id="item_level" type="number" min="1" max="50">
                </input>
            </div>
            <div class="form-group">
                <label for="training_level">Training Level:</label>
                <select id="training_level">
                    <!-- js takes over here -->
                </select>
            </div>
            <div class="form-group">
            </div>
            <!-- to be done -->
            <div class="form-group">
                <label for="perk_1">Perk 1:</label>
                <select id="perk_1">
                    <option></option>
                </select>
            </div>
            <div class="form-group">
                <label for="perk_2">Perk 2:</label> 
                <select id="perk_2">
                    <option></option>
                </select>
            </div>
            <div class="form-group">
                <label for="perk_3">Perk 3:</label>
                <select id="perk_3">
                    <option></option>
                </select>
            </div>
            <div class="form-group">
                <label for="perk_4">Perk 4:</label>
                <select id="perk_4">
                    <option></option>
                </select>
            </div>
            <!-- end -->
        </div>
    </div>
</body>

</html>