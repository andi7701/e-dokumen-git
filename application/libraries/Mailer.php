<?php defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mailer {
    protected $_ci;

    /*
	protected $email_pengirim = 'admin@hartanzah.com'; // Isikan dengan email pengirim
    protected $nama_pengirim = 'HARTANZAH Roasters'; // Isikan dengan nama pengirim
    protected $password = 'ADMINharpin2'; // Isikan dengan password email pengirim
	
		$this->db->select('*');
			$this->db->where('id', '1');
			$ins = $this->db->get('setting');
			foreach($ins->result() as $row){
			
				protected $email_pengirim = $row->email_pengirim; // Isikan dengan email pengirim
				protected $nama_pengirim = $row->nama_pengirim; // Isikan dengan nama pengirim
				protected $password = $row->password; // Isikan dengan password email pengirim
				protected $host = $row->host; // Isikan dengan host pengirim
				protected $port = $row->port; // Isikan dengan port pengirim
			}	
	
	
    protected $email_pengirim = 'admin@wongselo.com'; // Isikan dengan email pengirim
    protected $nama_pengirim = 'HARTANZAH Roasters'; // Isikan dengan nama pengirim
    protected $password = 'passwordwongselo'; // Isikan dengan password email pengirim
    protected $host = 'server242.web-hosting.com'; // Isikan dengan host pengirim
    protected $port = 465; // Isikan dengan port pengirim
	
	*/
	
    public function __construct(){
        $this->_ci = &get_instance(); // Set variabel _ci dengan Fungsi2-fungsi dari Codeigniter

        require_once(APPPATH.'third_party/phpmailer/Exception.php');
        require_once(APPPATH.'third_party/phpmailer/PHPMailer.php');
        require_once(APPPATH.'third_party/phpmailer/SMTP.php');
    }

    public function send($data){
        $mail = new PHPMailer;
        $mail->isSMTP();

        $mail->Host = $data['host'];		
        $mail->Username = $data['email_pengirim']; // Email Pengirim
        $mail->Password = $data['password']; // Isikan dengan Password email pengirim
		$mail->Port = $data['port'];
		
/*
        $mail->Host = $this->host;		
        $mail->Username = $this->email_pengirim; // Email Pengirim
        $mail->Password = $this->password; // Isikan dengan Password email pengirim
		$mail->Port = $this->port;
*/		
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        // $mail->SMTPDebug = 2; // Aktifkan untuk melakukan debugging

		$mail->setFrom($data['email_pengirim'], $data['nama_pengirim']);
		
/*   
		$mail->setFrom($this->email_pengirim, $this->nama_pengirim);
*/
        $mail->addAddress($data['email_penerima'], '');
        $mail->isHTML(true); // Aktifkan jika isi emailnya berupa html

        $mail->Subject = $data['subjek'];
        $mail->Body = $data['content'];
        // $mail->AddEmbeddedImage('image/logo.png', 'logo_mynotescode', 'logo.png'); // Aktifkan jika ingin menampilkan gambar dalam email

        $send = $mail->send();

        if($send){ // Jika Email berhasil dikirim
            $response = array('status'=>'Sukses', 'message'=>'Email berhasil dikirim');
        }else{ // Jika Email Gagal dikirim
            $response = array('status'=>'Gagal', 'message'=>'Email gagal dikirim');
        }

        return $response;
    }

}