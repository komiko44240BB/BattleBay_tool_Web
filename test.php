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
                    <option></option>
                </select>
            </div>
            <div class="form-group">
                <label for="item_rarity">Item Rarity:</label>
                <select id="item_rarity">
                    <option></option>
                </select>
            </div>
            <div class="form-group">
                <label for="item_name">Item Name:</label>
                <select id="item_name">
                    <option></option>
                </select>
            </div>
            <div class="form-group">
                <label for="item_level">Item Level:</label>
                <select id="item_level">
                    <?php
                    for ($i = 1; $i < 50; $i++) {
                        echo "<option value='$i'>$i</option>";
                    }
                    ?>
                    <option></option>
                </select>
            </div>
            <div class="form-group">
                <label for="training_level">Training Level:</label>
                <select id="training_level">
                    <option></option>
                </select>
            </div>
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
        </div>
    </div>
</body>

</html>