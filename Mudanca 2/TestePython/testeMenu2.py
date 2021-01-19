  #criação do menu principal
    topo = self.winfo_toplevel()                #pegamos aqui a referencia à janela principal
    self.menuBar = Tkinter.Menu(topo)           #Criamos uma barra de menus nesta janela
     
    mnuArquivo = Tkinter.Menu(self.menuBar, tearoff=0)               #criamos o menu arquivo
    mnuArquivo.add_command(label="Novo", command=self.processaTBD)   #criamos diferentes opções. Apenas como exemplo
    mnuArquivo.add_command(label="Salvar", command=self.processaTBD) #mantivemos o padrão Novo/Salvar/Sair
    mnuArquivo.add_separator()                                       #uma barra separa o comando de sair do software
    mnuArquivo.add_command(label="Sair", command=topo.quit)          #ao comando sair associamos o método que fecha o programa
    self.menuBar.add_cascade(label="Arquivo", menu=mnuArquivo)       #associamos estes submenus ao menu arquivo
 
    # criamos mais alguns menus apenas como exemplo
    mnuEditar = Tkinter.Menu(self.menuBar, tearoff=0)
    mnuEditar.add_command(label="Cortar", command=self.processaTBD)      #
    mnuEditar.add_command(label="Copiar", command=self.processaTBD)
    mnuEditar.add_command(label="Colar", command=self.processaTBD)
    self.menuBar.add_cascade(label="Editar", menu=mnuEditar)
 
    mnuAjuda = Tkinter.Menu(self.menuBar, tearoff=0)
    mnuAjuda.add_command(label="About", command=self.processaTBD)
    self.menuBar.add_cascade(label="Help", menu=mnuAjuda)
 
    # display the menu
    topo.config(menu=self.menuBar)
 
 
def processaTBD(self):
    pass
