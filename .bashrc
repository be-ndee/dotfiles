export PS1="\[\033[01;32m\]\u@\h\[\033[00m\]:\[\033[01;34m\]\w\[\033[00m\] $ "
alias ll='ls -la'


if [ -f $(brew --prefix)/etc/bash_completion ]; then
    . $(brew --prefix)/etc/bash_completion
fi

[ -f ~/.fzf.bash ] && source ~/.fzf.bash
[ -f /usr/local/lib/ruby/gems/2.3.0/gems/timetrap-1.12.0/completions/bash/timetrap-autocomplete.bash ] && source /usr/local/lib/ruby/gems/2.3.0/gems/timetrap-1.12.0/completions/bash/timetrap-autocomplete.bash

