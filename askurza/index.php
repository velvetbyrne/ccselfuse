<?php
$title = 'Ask Urza 2.0';
$desc = 'Select random loyalty abilities from across all of Magic’s past planeswalkers. Gain 3 life? What a dud... Two extra turns? Yes please! Urza can do it all';
include('../globalHTML/header-1.php');
?>
    <h2 class='readable-background header-extension title center margin-bottom-large'>Ask Urza 2.0</h2>
    <style>
        .askUrzaGrid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: auto 90pt auto;
            align-items: center;
            justify-items: center;
            grid-gap: 2rem;
        }
        .urzaCard {
            width: 90vw;
            text-align: center;
            grid-column: 1 / span 3;
        }
        .urzaCard > img {
            width: 100%;
            height: auto;
        }
        .askUrzaButton {
            height: auto;
            width: 22vw;
            transition: 0.25s;
            cursor: pointer;
        }
        #askUrzaResult {
            grid-column: 1 / span 3;
            padding: 1rem;
            margin: 0.5rem;
            border-radius: 1rem;
            font: 1.5rem belerenb;
        }
        @media screen and (min-width: 864pt) {
            .askUrzaGrid {
                grid-template-columns: calc(360pt) 1fr 1fr 1fr !important;
                grid-template-rows: 92pt auto !important;
            }
            .urzaCard {
                grid-column: 1;
                grid-row: 1 / span 2 !important;
            }
            #askUrzaResult {
                grid-column: 2 / span 3 !important;
            }
        }
        @media screen and (min-width: 380pt) {
            .urzaCard {
                width: 360pt;
            }
            .askUrzaButton {
                height: auto;
                width: 100pt;
                transition: 0.25s;
            }
            .askUrzaButton:hover {
                width: 110pt;
            }
            .askUrzaButton:active {
                width: 120pt !important;
            }
        }
    </style>
    <div class="askUrzaGrid layer margin-bottom-large">
        <div class="urzaCard">
            <img src="/askurza/urzaBlank.png">
        </div>
        <div>
            <img class="askUrzaButton" src="/askurza/plus.png" onclick="randomAbility(0)">
        </div>
        <div>
            <img class="askUrzaButton" src="/askurza/minus.png" onclick="randomAbility(1)">
        </div>
        <div>
            <img class="askUrzaButton" src="/askurza/ultimate.png" onclick="randomAbility(2)">
        </div>
        <h3 id="askUrzaResult" class='readable-background'></h3>
    </div>
    <div class="readable-background layer margin-bottom-large">
        <h5>
            Ask Urza 2.0 is a replacement for AskUrza.com that periodically compiles all planeswalker abilities and sorts them into three categories for use with Urza, Academy Headmaster. This allows for much more unpredictability and, in my opinion, much more fun. To use Ask Urza, simply click on the +1, -1, or -6, and let the gods of chaos decide your fate!
        </h5>
    </div>
    <script defer src="/askurza/askUrza.js"></script>
<?php include('../globalHTML/footer.php'); ?>