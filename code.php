<?php
        // Print out main menu..
    system('clear');
    system('figlet recode mati');
    echo "=========================\n";
    echo "=      TOOLS-ENCODE     =\n";
    echo "=     AUTHOR :MR.ARIS   =\n";
    echo "= WHATSAPP :08884196160 =\n";
    echo "=========================\n";
    echo "DILARANG RECODE!!\n\n";
    echo "===============================================\n";
    echo "=      TOOLS UNFAEDAH    TOOLS UNFAEDAH       =\n";
    echo "=     (づ｡◕‿‿◕｡)づ        ah ah ah            =\n";
    echo "=    pastikan ada encrypt                     =\n";
    echo "===============================================\n";


    echo "pilih menu:\n\n";
    echo "    1) Encode Md5\n";
    echo "    2) Encode Base64\n";
    echo "    3) Encode Sha1\n";
    echo "    4) Encode Md4\n";
    echo "    5) Encode Semua type\n";
    echo "    6) Install bahan
    echo "    x) Exit\n";
    echo "Pilih Type Encode : ";
    switch(trim(fgets(STDIN,256)))
        {
            case 1:
                echo "Pilih Nomor Mana : ";
                $kata = trim(fgets(STDIN,256));
                echo "Encode Md5 :",md5($kata),"\n";
                exit();
            case 2:
                echo "Pilih Nomor Mana : ";
                $kata = trim(fgets(STDIN));
                echo "Encode Base64 :",base64_encode($kata),"\n";
                exit();
            case 3:
                echo "Pilih Nomor Mana : ";
                $kata = trim(fgets(STDIN));
                echo "Encode Base64 :",sha1($kata),"\n";
                exit();
            case 4:
                echo "Pilih Nomor Mana : ";
                $kata = trim(fgets(STDIN));
                echo "Encode Md4 :",crypt('md4',$kata);
                exit();
            case 5:
                echo "Pilih Nomor Mana : ";
                $kata = trim(fgets(STDIN));
                foreach (hash_algos() as $v) {
                $r = hash($v, $kata, false);
                printf("%-12s %3d %s\n", $v, strlen($r), $r);
                }
                exit();
            case 6:
                echo "Pilih Nomor Mana : ";
                system('pkg update && pkg upgrade');
                system('pkg install git');
                echo "sudah gan";
                exit();
    
            case "x":
                exit();
        }
    // Close standard in..
    fclose(STDIN);
?>
