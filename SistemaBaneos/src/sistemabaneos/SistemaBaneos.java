/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package sistemabaneos;

import java.awt.BorderLayout;
import java.awt.Color;
import java.awt.GridLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;
import javax.swing.JScrollPane;

/**
 *
 * @author Jesus David
 */
public class SistemaBaneos extends JFrame implements ActionListener {

    public SistemaBaneos(){
        super("SistemaBaneos");
        setSize(800,600);
        setDefaultCloseOperation(DISPOSE_ON_CLOSE);
        setExtendedState(MAXIMIZED_BOTH); //para que la ventana comienze maximizada en las 2 dimensiones
        initComponents();
        
        setVisible(true);
    }
    private void initComponents(){
        setLayout(new BorderLayout());
        //Dividimos las opciones de la informacion
        Color color =new Color(134,100,155);
        
        //Creacion de paneles
        JPanel panel_cent=new JPanel(new BorderLayout());
        JPanel panel_opciones=new JPanel(new GridLayout(2,1,20,20));
        JPanel panel_informacion=new JPanel(new BorderLayout());
        
        //Definir layout
         //panel_cent.setLayout(glayout);
        
        //JScroll
         JScrollPane scroll=new JScrollPane();
         
        //Creacion de botones
        JButton Salir =new JButton("Salir");
        
        //Creacion de label
        JLabel texto=new JLabel("Hola que tal estoy en el sur");
        
        //Agregar paneles
        //panel_cent.add(panel_opciones,BorderLayout.WEST);
        add(panel_cent,BorderLayout.CENTER);
        add(panel_opciones,BorderLayout.WEST);
        panel_opciones.add(Salir,BorderLayout.SOUTH);
        
        //Agregar componentes a los paneles
        panel_opciones.add(texto,BorderLayout.NORTH);
        panel_opciones.setBackground(color);
        panel_cent.add(panel_informacion);
        
    }
    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        SistemaBaneos sistema=new SistemaBaneos();
    }

    @Override
    public void actionPerformed(ActionEvent ae) {
        
    }
    
}
