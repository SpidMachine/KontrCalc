<?php

$str = "Bring me some stuff<br>";
$arr=explode ("stuff", $str);
print_r($arr);

$imp=implode("weed", $arr);
print_r($imp);

$shuffle = "I'll make you shout mtfck";
"<br>";
echo str_shuffle($shuffle);
echo "<br>";
echo $coded = ord("a");
echo "<br>";
echo $decoded = chr($coded);
echo "<br>";
echo ord("\r");
echo "<br>";
echo ord("\n");
echo "<br>";
$some_string = "It's just a free white non-american 16 years old string";
$shuffle_str = str_shuffle($some_string);
echo strtoupper($shuffle_str);
echo "<br>";
for ($i = ord("A"); $i <= ord("Z"); $i++){
    echo chr($i)."<br>";
}
for ($i = ord("a"); $i <= ord("z"); $i++){
    echo chr($i)."<br>";
}
echo "<br>";
echo ucfirst($some_string);
echo "<br>";
echo ucwords($shuffle_str);
echo "<br>";
echo $tab_str = " Y e p ";
echo "<br>";
echo trim($tab_str);
echo "<br>";
$long_str = "\hjasdfhzjsdfgzdjshzdsfjhdfsvgdfj";
echo strlen($long_str);
echo "<br>";
echo substr_count($long_str, "z");
echo "<br>";
echo $repl = str_replace("Hello", "Not hello",
"Hello, is it <--Comment--> me u r looking for"."<br>"."Hello");
echo "<br>";
echo $st = strip_tags($repl);
$long_wrap = "kjghfsgfsdhjfagsdhfa .\n a s.\nhdfg .\nashdgf hgashjfg ajhsdgf hgashjedgfgha dhga jhfgajheg kjhgdkjhgf kahswegfka swhgdkhfjgsehagdkhfg kjahewgfkjdgasfjh gajshegklfj\hasdgkfhgaekswh ";
?><pre><?php echo wordwrap($long_wrap,10);?></pre><?php

echo nl2br($long_wrap);
echo "<br>";
echo htmlspecialchars("<b>Привет</b>");
echo "<br>";
echo ("<b>Привет</b>");


?>