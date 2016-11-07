make copy:
	cp .bash_profile ~/.bash_profile
	cp .bashrc ~/.bashrc
	cp .slate ~/.slate
	cp .tmux.conf ~/.tmux.conf
	cp .vimrc ~/.vimrc
	mkdir -p ~/.vim/
	cp -r ftplugin/ ~/.vim/ftplugin/
