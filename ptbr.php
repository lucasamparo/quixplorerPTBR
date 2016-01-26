<?php

// English Language Module for v2.3 (translated by the QuiX project)

$GLOBALS["charset"] = "utf-8";
$GLOBALS["text_dir"] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$GLOBALS["date_fmt"] = "d/m/Y H:i";
$GLOBALS["error_msg"] = array(
	// error
	"error"			=> "ERRO(S)",
	"back"			=> "Voltar",
	
	// root
	"home"			=> "O diretório principal não existe, verifique suas configurações.",
	"abovehome"		=> "Este diretório não pode estar acima do diretório principal.",
	"targetabovehome"	=> "O diretório alvo não pode estar acima do diretório principal.",
	
	// exist
	"direxist"		=> "Este diretório não existe.",
	"filedoesexist"	=> "Este arquivo já existe.",
	"fileexist"		=> "Este arquivo não existe.",
	"itemdoesexist"		=> "Este item já existe.",
	"itemexist"		=> "Este item não existe.",
	"targetexist"		=> "O diretório alvo não existe.",
	"targetdoesexist"	=> "O diretório alvo já existe.",
	
	// open
	"opendir"		=> "Impossível abrir este diretório.",
	"readdir"		=> "Impossível ler este diretório.",
	
	// access
	"accessdir"		=> "Você não tem acesso a este diretório.",
	"accessfile"		=> "Você não tem acesso a este arquivo.",
	"accessitem"		=> "Você não tem acesso a este item.",
	"accessfunc"		=> "Você não tem permissão para usar esta função.",
	"accesstarget"		=> "Você não tem acesso ao diretório alvo.",
	
	// actions
	"permread"		=> "Recuperação de permissões falhou.",
	"permchange"		=> "Mudança de permissões falhou.",
	"openfile"		=> "Abertura de arquivo falhou.",
	"savefile"		=> "Salvamento de arquivo falhou.",
	"createfile"		=> "Criação de arquivo falhou.",
	"createdir"		=> "Criação de diretório falhou.",
	"uploadfile"		=> "Upload de arquivo falhou.",
	"copyitem"		=> "Cópia falhou.",
	"moveitem"		=> "Movimentação falhou.",
	"delitem"		=> "Deleção falhou.",
	"chpass"		=> "Mudança de senha falhou.",
	"deluser"		=> "Remoção de usuário falhou.",
	"adduser"		=> "Adição de usuário falhou.",
	"saveuser"		=> "Salvamento de usuário falhou.",
	"searchnothing"		=> "Você precisa informar algo para ser pesquisado.",
	
	// misc
	"miscnofunc"		=> "Função indisponível.",
	"miscfilesize"		=> "Este arquivo excedeu o limite de tamanho.",
	"miscfilepart"		=> "O arquivo só foi parcialmente enviado.",
	"miscnoname"		=> "Você deve informar um nome.",
	"miscselitems"		=> "Você não selecionou nada.",
	"miscdelitems"		=> "Certeza que quer deletar estes \"+num+\" item(s)?",
	"miscdeluser"		=> "Certeza que deseja deletar o usuário '\"+user+\"'?",
	"miscnopassdiff"	=> "Nova senha não é diferente da antiga.",
	"miscnopassmatch"	=> "Senhas não conferem.",
	"miscfieldmissed"	=> "Você esqueceu um campo importante.",
	"miscnouserpass"	=> "Usuário ou senha incorretas.",
	"miscselfremove"	=> "Você não pode remover a si mesmo.",
	"miscuserexist"		=> "Usuário já existe.",
	"miscnofinduser"	=> "Não foi possível encontrar este usuário.",
);
$GLOBALS["messages"] = array(
	// links
	"permlink"		=> "Mudar permissões",
	"editlink"		=> "Editar",
	"downlink"		=> "Baixar",
	"uplink"		=> "Subir",
	"homelink"		=> "Início",
	"reloadlink"		=> "Recarregar",
	"copylink"		=> "Copiar",
	"movelink"		=> "Movimentar",
	"dellink"		=> "Deletar",
	"comprlink"		=> "Arquivar",
	"adminlink"		=> "ADMIN",
	"logoutlink"		=> "Logout",
	"uploadlink"		=> "Enviar Arquivos",
	"searchlink"		=> "Buscar",
	
	// list
	"nameheader"		=> "Nome",
	"sizeheader"		=> "Tamanho",
	"typeheader"		=> "Tipo",
	"modifheader"		=> "Última Modificação",
	"permheader"		=> "Permissões",
	"actionheader"		=> "Ações",
	"pathheader"		=> "Caminho",
	
	// buttons
	"btncancel"		=> "Cancelar",
	"btnsave"		=> "Salvar",
	"btnchange"		=> "Mudar",
	"btnreset"		=> "Resetar",
	"btnclose"		=> "Fechar",
	"btncreate"		=> "Criar",
	"btnsearch"		=> "Buscar",
	"btnupload"		=> "Enviar",
	"btnmove"		=> "Mover",
	"btnlogin"		=> "Login",
	"btnlogout"		=> "Logout",
	"btnadd"		=> "Adicionar",
	"btnedit"		=> "Editar",
	"btnremove"		=> "Remover",
	
	// actions
	"actdir"		=> "Diretório",
	"actperms"		=> "Mudar Permissões",
	"actedit"		=> "Editar Arquivo",
	"actsearchresults"	=> "Resultados das buscas",
	"actcopyitems"		=> "Copiar item(s)",
	"actcopyfrom"		=> "Copiar de /%s para /%s ",
	"actmoveitems"		=> "Mover item(s)",
	"actmovefrom"		=> "Mover de /%s para /%s ",
	"actlogin"		=> "Login",
	"actloginheader"	=> "Login para Disco Virtual iMestre",
	"actadmin"		=> "Administração",
	"actchpwd"		=> "Mudar Senha",
	"actusers"		=> "Usuários",
	"actarchive"		=> "Item(s) Arquivados",
	"actupload"		=> "Enviar Arquivo(s)",
	
	// misc
	"miscitems"		=> "Item(s)",
	"miscfree"		=> "Apagar",
	"miscusername"		=> "Usuário",
	"miscpassword"		=> "Senha",
	"miscoldpass"		=> "Senha Antiga",
	"miscnewpass"		=> "Nova Senha",
	"miscconfpass"		=> "Confirmar Senha",
	"miscconfnewpass"	=> "Confirmar nova Senha",
	"miscchpass"		=> "Mudar Senha",
	"mischomedir"		=> "Diretório Inicial",
	"mischomeurl"		=> "URL Inicial",
	"miscshowhidden"	=> "Mostrar Arquivos Ocultos",
	"mischidepattern"	=> "Ocultar Pai",
	"miscperms"		=> "Permissões",
	"miscuseritems"		=> "(nome, diretório de inicio, mostrar arquivos ocultos, permissões, ativo)",
	"miscadduser"		=> "Adicionar Usuário",
	"miscedituser"		=> "Editar Usuário '%s'",
	"miscactive"		=> "Ativo",
	"misclang"		=> "Linguagem",
	"miscnoresult"		=> "Nenhum resultado disponível.",
	"miscsubdirs"		=> "Buscar subdiretórios",
	"miscpermnames"		=> array("Apenas Ler","Ler & Executar","Mudar Senha","Ler, Executar & Mudar Senha",
					"Administrador"),
	"miscyesno"		=> array("Sim","Não","S","N"),
	"miscchmod"		=> array("Dono", "Grupo", "Público"),
);
?>