/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package sistemabaneos;

import java.awt.BorderLayout;
import java.awt.Color;
import java.awt.FlowLayout;
import java.awt.Font;
import java.awt.GridLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.util.Collections;
import java.util.Comparator;
import javax.swing.ImageIcon;
import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;

/**
 *
 * @author chango
 */

//Un componente le notifica los eventos que ocurren con el a un objeto
//de tipo Listener. El listener se encarga de hacer la accion correspondiente
//cuando se le notifica el evento.
//Un objeto listener es una instancia de una clase que implemente una interfaz
//Listener. Existen diferentes interfaces Listener, de acuerdo a los tipos de
//evento que se pueden generar.
//Un boton genera eventos de accion, la interfaz correspondiente es ActionListener
//Esta clase implementara ActionLister para poder recibir notificaciones de
//eventos de un boton.

public class MyFrame extends JFrame implements ActionListener{
    Color color;
    Font font;
    JLabel imagen;   //Objeto que muestra la imagen
    JButton controles[]=new JButton[4];
    public MyFrame(){
        super("Sistema de baneos");
        //Inicializamos las caracteristicas default que queremos para
        //este frame
        setSize(800,600);
        setDefaultCloseOperation(DISPOSE_ON_CLOSE);    
        setExtendedState(MAXIMIZED_BOTH); //para que la ventana comienze maximizada en las 2 dimensiones
        initComponents();
        setVisible(true);
    }
    private void initComponents(){
        //Para crear e inicializar componentes que iran en esta ventana
        setLayout(new BorderLayout());
       
        //El color del panel
        color=new Color(129,100,155);
        
        JPanel opciones=new JPanel(new BorderLayout());
        opciones.setBackground(color);
        JPanel informacion=new JPanel(new BorderLayout());
        add(opciones,BorderLayout.WEST);
        add(informacion,BorderLayout.CENTER);
        
        
        JPanel home =new JPanel(new GridLayout(3,1));
        JPanel home_im=new JPanel(new GridLayout(5,1,20,20));
        home_im.setBackground(color);
        home.setBackground(color);
        opciones.add(home);
       
        //Opciones
        JPanel Line = new JPanel(new BorderLayout());
        Line.setBackground(color);
        JPanel inicio= new JPanel(new FlowLayout());
        JPanel Line2 = new JPanel(new BorderLayout());
        JPanel tablas = new JPanel(new BorderLayout());
        
        inicio.setBackground(color);
        ImageIcon img=new ImageIcon(getClass().getResource("/imagenes/balu.png"));
        imagen=new JLabel(img);
        opciones.add(imagen,BorderLayout.NORTH);
        JLabel line=new JLabel("     ___________________________    ");
         ImageIcon casita=new ImageIcon(getClass().getResource("/imagenes/casita.png"));
        imagen=new JLabel(casita);
        JButton lblInicio=new JButton("     Inicio");
        Line.add(line,BorderLayout.NORTH);
        inicio.add(imagen);
        inicio.add(lblInicio);
        lblInicio.setForeground(Color.WHITE);
        line.setForeground(Color.WHITE);
        //home.add(imagen);
        
       
        home_im.add(Line);
        home_im.add(inicio);
        home.add(home_im);
        

        //Informacion
        JPanel pnlCuenta=new JPanel(new BorderLayout());
        JPanel infoPanel=new JPanel(new FlowLayout());
        JPanel pnlCopy=new JPanel(new BorderLayout());
        //Agregamos los paneles al modulo de informacion
        informacion.add(pnlCuenta,BorderLayout.NORTH);
        informacion.add(infoPanel,BorderLayout.CENTER);
        informacion.add(pnlCopy,BorderLayout.SOUTH);
        
        //Agregamos las cosas a cuenta
        JPanel panel_sup=new JPanel(new FlowLayout());
        JButton login=new JButton("Inicia sesión");
        login.addActionListener(this);
       // login.setBackground(Color.WHITE);
        
        ImageIcon user=new ImageIcon(getClass().getResource("/imagenes/user.png"));
        imagen=new JLabel(user);
        panel_sup.add(login);
        panel_sup.add(imagen);
        panel_sup.setBackground(Color.WHITE);
        JPanel baja=new JPanel();
        baja.setBackground(Color.WHITE);
        pnlCuenta.add(baja,BorderLayout.NORTH);
        pnlCuenta.add(panel_sup,BorderLayout.EAST);
        pnlCuenta.setBackground(Color.WHITE);
        
        //Agregamos las cosas a la info del panel
        Color color2=new Color(248,249,252);
        ImageIcon logo=new ImageIcon(getClass().getResource("/imagenes/logo.png"));
        imagen=new JLabel(logo);
        JPanel espacio=new JPanel(new GridLayout(2,1,20,20));
        espacio.setBackground(color2);
        font=new Font("Helvetica",Font.PLAIN,40);
        JLabel bienve=new JLabel("                             Bienvenido al Panel de Balu Network v2");
        bienve.setFont(font);
        JLabel info=new JLabel("Si eres STAFF y ya tienes cuenta, inicia sesión. Si eres usuario puedes revisar la información que te ofrecemos.");
        font=new Font("Helvetica",Font.PLAIN,25);
        info.setFont(font);
        infoPanel.add(imagen);
        espacio.add(bienve);
        espacio.add(info);
        infoPanel.add(espacio);
        infoPanel.setBackground(color2);
        
        //Agregamos las cosas al final del panel
        JPanel copyr=new JPanel(new FlowLayout());
        copyr.setBackground(Color.WHITE);
        JLabel copy=new JLabel("Copyright © Balu Network - Ian Adame - Jesus David Alonso 2020");
        copyr.add(copy);
        pnlCopy.add(baja,BorderLayout.NORTH);
        pnlCopy.add(copyr,BorderLayout.CENTER);
        JPanel baja2=new JPanel();
        baja2.setBackground(Color.WHITE);
        pnlCopy.add(baja2,BorderLayout.SOUTH);



        //los Panel que creamos,los agregamos al panel de Panel
    
        /*JButton boton=new JButton("|<");//para ir al Line
        boton.addActionListener(this); //este boton le notificara a esta ventana sus eventos de accion
        
        boton.setEnabled(false);
        controles[0]=boton;
        
        boton=new JButton("<");
        boton.addActionListener(this);
        //botones.add(boton);
        boton.setEnabled(false);
        controles[1]=boton;
        
        boton=new JButton(">");
        boton.addActionListener(this);
       // Panel.add(boton);
        controles[2]=boton;
        
        boton=new JButton(">|");
        boton.addActionListener(this);
        //botones.add(boton);
        controles[3]=boton;
        */
        
       // add(imagen,BorderLayout.CENTER);
        
        
    }
    @Override
    public void actionPerformed(ActionEvent ae) {
        String comando=ae.getActionCommand();//Devuelve la etiqueta del boton que presionado
        if(comando.equals("Inicia sesión")){//incrementamos el numero de la imagen actual
            System.out.println("jala");
        }
        if(comando.equals("<")){//incrementamos el numero de la imagen actual
            
        }
        if(comando.equals("|<")){//incrementamos el numero de la imagen actual
            
        }
        if(comando.equals(">|")){//incrementamos el numero de la imagen actual
            
        }
        //una vez cambiado el indice de la imagen a mostrar, actualizamo el 
        //texto para mostrar la imagen
        //imagen.setText("<HTML><CENTER><img src=\"http://ing.ens.uabc.mx/~sinfante/img/Img"+img_num+".jpg\" /></CENTER></HTML>");
        
        
    }
     
}
