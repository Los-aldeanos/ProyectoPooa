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
import javax.swing.ImageIcon;
import javax.swing.JButton;
import javax.swing.JFileChooser;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JMenu;
import javax.swing.JMenuBar;
import javax.swing.JMenuItem;
import javax.swing.JOptionPane;
import javax.swing.JPanel;
import javax.swing.SwingConstants;

/**
 *
 * @author chango
 */
public class SistemaBaneos extends JFrame implements ActionListener{
     Color color;
    Font font;
    JLabel imagen;   //Objeto que muestra la imagen
    public SistemaBaneos(){
        super("Sistema de baneos");
        setSize(800,600);
        setDefaultCloseOperation(DISPOSE_ON_CLOSE);
        setExtendedState(MAXIMIZED_BOTH); //para que la ventana comienze maximizada en las 2 dimensiones
        initComponents();
        
        setVisible(true);
    }
    private void initComponents(){
        
        JButton boton=new JButton("Huele a gas...");
        boton.setActionCommand("EXIT");
        boton.addActionListener(this);
        add(boton,BorderLayout.SOUTH);
        initMenu();
    }
    private void initMenu(){
        //Para crear e inicializar componentes que iran en esta ventana
        setLayout(new BorderLayout());
       
        //El color del panel
        Color color3=new Color(148,123,170);
        Color color4=new Color(179,158,185);
        color=new Color(129,100,155);
        
        JPanel opciones=new JPanel(new BorderLayout());
        opciones.setBackground(color);
        JPanel informacion=new JPanel(new BorderLayout());
        add(opciones,BorderLayout.WEST);
        add(informacion,BorderLayout.CENTER);
        
        
        JPanel home =new JPanel(new BorderLayout());
        //JPanel home_im=new JPanel(new BorderLayout());
        //home_im.setBackground(color);
        home.setBackground(color);
        opciones.add(home,BorderLayout.CENTER);
       
        //Opciones
        JPanel inicio= new JPanel(new BorderLayout());
        home.add(inicio,BorderLayout.CENTER);
        inicio.setBackground(color);
        
        JPanel pnlinicio=new JPanel(new FlowLayout());
        inicio.add(pnlinicio,BorderLayout.NORTH);
        pnlinicio.setBackground(color);
        
        JPanel Line2 = new JPanel(new BorderLayout());
        inicio.add(Line2,BorderLayout.CENTER);
        Line2.setBackground(color);
        
        JPanel tablas = new JPanel(new BorderLayout());
        Line2.add(tablas,BorderLayout.CENTER);
        tablas.setBackground(color);
        JPanel nombre=new JPanel(new BorderLayout());
        nombre.setBackground(color);
        tablas.add(nombre,BorderLayout.NORTH);
        
        JLabel tabla=new JLabel("     Tablas");
        JPanel dentro=new JPanel(new BorderLayout());
        dentro.setBackground(color);
        JPanel izquierda=new JPanel(new BorderLayout());
        izquierda.setBackground(color);
        izquierda.add(tabla,BorderLayout.WEST);
        dentro.add(izquierda,BorderLayout.NORTH);
        tabla.setForeground(color4);
        JPanel baja3=new JPanel();
        baja3.setBackground(color);
        nombre.add(baja3,BorderLayout.NORTH);
        nombre.add(dentro,BorderLayout.CENTER);
        JPanel buttons=new JPanel(new GridLayout(3,1,20,20));
        buttons.setBackground(color);
        dentro.add(buttons,BorderLayout.CENTER);
        //nombre.add(buttons,BorderLayout.CENTER);
        
        JButton viewBaneos=new JButton("Tabla de Baneos");
        viewBaneos.setHorizontalAlignment(SwingConstants.LEFT);
        viewBaneos.setBorderPainted(false);
        viewBaneos.setForeground(Color.WHITE);
        viewBaneos.setBackground(color);
        viewBaneos.addActionListener(this);
        JButton Baneos=new JButton("Banear");
        Baneos.setHorizontalAlignment(SwingConstants.LEFT);
        Baneos.setBorderPainted(false);
        Baneos.setForeground(Color.WHITE);
        Baneos.setBackground(color);
        Baneos.addActionListener(this);
        JButton RemoveBan=new JButton("Remover Baneo");
        RemoveBan.setHorizontalAlignment(SwingConstants.LEFT);
        RemoveBan.setBorderPainted(false);
        RemoveBan.setForeground(Color.WHITE);
        RemoveBan.setBackground(color);
        RemoveBan.addActionListener(this);
        buttons.add(viewBaneos);
        buttons.add(Baneos);
        buttons.add(RemoveBan);
        
        ImageIcon img=new ImageIcon(getClass().getResource("/imagenes/balu.png"));
        imagen=new JLabel(img);
        opciones.add(imagen,BorderLayout.NORTH);
        JLabel line=new JLabel("     ___________________________    ");
        line.setForeground(color3);
        JLabel line2=new JLabel("     ___________________________    ");
        line2.setForeground(color3);
        ImageIcon casita=new ImageIcon(getClass().getResource("/imagenes/casita.png"));
        imagen=new JLabel(casita);
        JButton lblInicio=new JButton("     Inicio");
        lblInicio.setBorderPainted(false);
        lblInicio.setBackground(color);
        
        
        pnlinicio.add(imagen);
        pnlinicio.add(lblInicio);
        Line2.add(line2,BorderLayout.NORTH);
        lblInicio.setForeground(Color.WHITE);
        
        
        //Primer panel
        home.add(line,BorderLayout.NORTH);
        
        
        
       
        //home_im.add(Line);
        //home_im.add(inicio);
        //home.add(home_im);
        

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
        login.setBorderPainted(false);
        login.setBackground(Color.WHITE);
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
        
    }
    @Override
    public void actionPerformed(ActionEvent ae) {
        String comando=ae.getActionCommand();
        if(comando.equals("EXIT")){
            //cerramos la ventana
            //JOptionPane muestra cuadros de dialogo comunes, como
            //mensajes de pregunta, o de mensaje
            if(JOptionPane.showConfirmDialog(this,"Si quiere salir?")==JOptionPane.OK_OPTION){
                JOptionPane.showInputDialog("Nombre de archivo");
                System.out.println("Saliendo de la aplicacion..");
                dispose();
            }
            //System.exit(0);
            return;
        }
        if(comando.equals("Tabla de baneos")){
            
        }
        if(comando.equals("Remover Baneo")){
          
        }
        if (comando.equals("Banear")){
            AplicarBaneos baneos=new AplicarBaneos(this);
            
            try{
            Thread dlg=new Thread((Runnable) baneos);
            dlg.start();
            }catch(ClassCastException ex){
                
            }
        }
    }
    private void open(){
        JFileChooser dialogo=new JFileChooser();
        
        if(dialogo.showOpenDialog(this)==JFileChooser.APPROVE_OPTION){
            System.out.println("Grabando archivo "+dialogo.getSelectedFile().getPath());
        }
    }
    public static void main(String[] args) {
        SistemaBaneos w=new SistemaBaneos();
    }

}    
