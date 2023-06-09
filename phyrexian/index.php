<?php
$title = 'Phyrexian Text Generator';
$desc = 'Generate random strands of phyrexian text for use with Card Conjurer, the custom Magic: The Gathering card creator';
include('../globalHTML/header-1.php');
?>
    <h2 class='readable-background header-extension title center margin-bottom-large'>Phyrexian Text Generator</h2>
    <style>
        textarea.input.phyrexian-textarea {
            resize: none;
            max-height: 66vh;
            height: 30rem;
        }
        textarea.input.phyrexian-textarea:disabled {
            opacity: 1;
        }
    </style>
    <div class="layer margin-bottom-large">
        <div class='input-grid padding margin-bottom readable-background'>
            <div>
                <h5 class='margin-bottom padding input-description'>Input the text you would like to be "translated"</h5>
                <textarea class='input phyrexian-textarea' id='inputText' oninput='generatePhyrexianText()'></textarea>
            </div>
            <div>
                <h5 class='margin-bottom padding input-description'>Then copy the "translated" text from here</h5>
                <textarea class='input phyrexian-textarea' id='outputText' style='font-family: "phyrexian";' disabled></textarea>
            </div>
        </div>
    </div>
    <div class="readable-background layer margin-bottom-large">
        <h3 class='padding margin-bottom center'>
            This is not a translator
        </h3>
        <h4 class='padding margin-bottom'>
            Phyrexian Text Generator simply takes the number of characters that you input and randomizes them into characters that are compatible with Phyrexian fonts.
        </h4>
        <h4 class='padding margin-bottom'>
            To use the generated text in Card Conjurer, simply copy and paste the output text, but remember to add {fontphyrexian} before it so that the correct font is used!
        </h4>
    </div>
    <script defer src="/phyrexian/phyrexian.js"></script>
<?php include('../globalHTML/footer.php'); ?>