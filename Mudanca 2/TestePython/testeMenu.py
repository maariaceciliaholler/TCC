#!/usr/bin/env python
# -*- coding: utf-8 -*-
#
#  conversorCF.py
# 
#  Copyright 2017 Tavares <tavares@tavares-Inspiron-5558>
# 
#  This program is free software; you can redistribute it and/or modify
#  it under the terms of the GNU General Public License as published by
#  the Free Software Foundation; either version 2 of the License, or
#  (at your option) any later version.
# 
#  This program is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU General Public License for more details.
# 
#  You should have received a copy of the GNU General Public License
#  along with this program; if not, write to the Free Software
#  Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
#  MA 02110-1301, USA.
# 
# 
 
#import Tkinter
from tkinter import *
import random
 
class minhaApp_tk(tkinter.tk):
# Tkinter.tk é a classe base para a janela padrão. A nossa classe minhaApp_tk irá herdar todas as funcionalidades da classe padrão.
 
    def __init__(self,parent):
        Tkinter.Tk.__init__(self,parent)
        # no construtor da nossa classe, apenas chamamo o construtor da classe pai, Tkinter.Tk.__init__()).
        self.parent = parent
        # geralmente necessitaremos  de acessar o pai de um objeto. É uma boa técnica  sempre salvar uma referencia ao pai.
        self.initialize()
        #no método initialize criamos os demais objetos que serão apresentados na tela, inicializamos as variáveis globais (irc..),
                   #inicializamos o hardware caso necessário, etc..
         
         
    def initialize(self):     #aqui criamos os widgets que serão apresentados na tela
         
        #criação do menu principal
        topo = self.winfo_toplevel()                #pegamos aqui a referencia à janela principal
        self.menuBar = Tkinter.Menu(topo)           #Criamos uma barra de menus nesta janlea
         
        mnuArquivo = Tkinter.Menu(self.menuBar, tearoff=0)               #criamos o menu arquivo
        mnuArquivo.add_command(label="Novo", command=self.processaTBD)   #criamos diferentes opções. Apenas como exemplo
        mnuArquivo.add_command(label="Salvar", command=self.processaTBD) #mantivemos o padrão Novo/Salvar/Sair
        mnuArquivo.add_separator()                                       #uma barra separa o comando de sair do software
        mnuArquivo.add_command(label="Sair", command=topo.quit)          #ao comando sair associamos o método que fecha o programa
        self.menuBar.add_cascade(label="Arquivo", menu=mnuArquivo)       #associamos estes submenus ao menu arquivo
 
        # criamos mais alguns menus  apenas como exemplo
        mnuEditar = Tkinter.Menu(self.menuBar, tearoff=0)
        mnuEditar.add_command(label="Cortar", command=self.processaTBD)      #associamos vários menus ao método processaTBD
        mnuEditar.add_command(label="Copiar", command=self.processaTBD)      #este método não faz nada, apenas proporciona
        mnuEditar.add_command(label="Colar", command=self.processaTBD)       #o caminho completo para o processamento do evento gerado
        self.menuBar.add_cascade(label="Editar", menu=mnuEditar)             #ao ser clicado o meni associado.
 
        mnuAjuda = Tkinter.Menu(self.menuBar, tearoff=0)
        mnuAjuda.add_command(label="About", command=self.processaTBD)
        self.menuBar.add_cascade(label="Help", menu=mnuAjuda)
 
        # display the menu
        topo.config(menu=self.menuBar)
 
         
          
        self.grid()     #vamos dispor os demais objetos na tela dentro de uma grade         
        self.lblC= Tkinter.Label(self, text="Graus Centígrados")     #este objeto irá apresentar o primeiro número
        self.lblC.grid(column=0, row=0)               #nesta posição
         
        self.lblSep= Tkinter.Label(self, text="<-->")     #este objeto irá apresentar o segundo  número
        self.lblSep.grid(column=1, row=0)               #nesta posição     
 
 
        self.lblF= Tkinter.Label(self, text="Graus Fahrenheit")     #este objeto irá apresentar o terceiro número
        self.lblF.grid(column=2, row=0)               #nesta posição       
 
        self.entryC = Tkinter.Entry(self)               #criamos o campo de texto onde está disponível o valor em gras centígrados
        self.entryC.grid(column=0,row=1,sticky='EW')    #deixamos na posição correspondente a primeira coluna, segunda linha  
 
        self.entryF = Tkinter.Entry(self)             #criamos o campo de texto onde esta disponivel o valor em graus fahrenheit
        self.entryF.grid(column=2,row=1,sticky='EW')  #deixamos na posição correspondente à terceira coluna, segunda linha
 
 
 
        self.btnCalculaF = Tkinter.Button(self,text=u"Centígrado -> Fahrenheit",command=self.OnButtonCalculaFClick)  #criamos o objeto botão
        self.btnCalculaF.grid(column=0,row=3)                   # e o colocamos na posição coluna 0, linha 3
                                                                    #associamos o clicar do botão ao método OnButtonCalculaFClick
 
 
        self.btnCalculaC = Tkinter.Button(self,text=u" Fahrenheit -> Centígrado",command=self.OnButtonCalculaCClick)  #criamos o objeto botão
        self.btnCalculaC.grid(column=2,row=3)                   # e o colocamos na posição coluna 0, linha 3
                                                                    #associamos o clicar do botão ao método OnButtonCalculaFClick
 
 
    def OnButtonCalculaFClick(self):     #calcula o valor em fahrenheit e mostra no campo correto
        fCent= float(self.entryC.get())  #le o valor no campo de entrada de centígrados
        fFar= (9.0 * fCent )/5 + 32.0    #calcula o novo valor
        self.entryF.delete(0,Tkinter.END)     #apaga o campo destino
        self.entryF.insert(0,str(fFar))    #atualiza o campo destino com o novo valor
         
         
         
         
    def OnButtonCalculaCClick(self):     #calcula o valor em centígrados e mostra no campo correto 
        fFar= float(self.entryF.get())  #le o valor no campo de entrada de far
        fCent= (fFar -32.0) * 5.0 / 9.0   #calcula o novo valor
        self.entryC.delete(0,Tkinter.END)     #apaga o campo destino
        self.entryC.insert(0,str(fCent))    #atualiza o campo destino com o novo valor
     
    def processaTBD(self):
        pass
     
    def processaSobre(self):
        pass
         
         
    def processaSair(self):
        pass       
     
#este é ponto onde o programa se inicia
#se o programa foi chamado a partir do interpretador python, o _name_  automaticamente será "__main__"
 
if __name__ == "__main__":
    app = minhaApp_tk(None)      #criamos uma aplicação sem nenhum pai, pois é a principal.
    app.title('Conversor C<->F')    #especificamos o título de nossa aplicação
    app.mainloop()                  #o programa entra no loop de espera de eventos (pressionar de menus, botões, etc..)
    
