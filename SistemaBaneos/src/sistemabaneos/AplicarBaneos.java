/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package sistemabaneos;

import java.awt.BorderLayout;
import java.awt.Color;
import java.awt.Dialog;
import java.awt.FlowLayout;
import java.awt.Font;
import java.awt.GridLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.util.ArrayList;
import javax.swing.ImageIcon;
import javax.swing.JDialog;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;
import javax.swing.JTextArea;
import javax.swing.SwingConstants;
import static javax.swing.WindowConstants.DISPOSE_ON_CLOSE;

/**
 *
 * @author Jesus David
 */
public class AplicarBaneos extends JDialog implements ActionListener {

    public AplicarBaneos(JFrame parent) {
         super(parent,"Galeria",Dialog.ModalityType.MODELESS);
        //Inicializamos las caracteristicas default que queremos para
        //este frame
        setSize(1750,1000);
        setLocationRelativeTo(null);
       setDefaultCloseOperation(DISPOSE_ON_CLOSE);    
        initComponents();
        setVisible(true);
    }
    @SuppressWarnings("empty-statement")
    private void initComponents(){
        setLayout(new BorderLayout());
        Color color=new Color(248,249,252);
        
        //Se hacen los paneles de la parte superior
        JPanel pnlbanear=new JPanel(new BorderLayout());
        pnlbanear.setBackground(color);
        add(pnlbanear,BorderLayout.NORTH);
        
        //Este panel es para despegar el panel de comando del lado izquiedo
        JPanel izquierda=new JPanel();
        izquierda.setBackground(color);
        JPanel derecha=new JPanel();
        derecha.setBackground(color);
        
        //En este panel se encuentra todos las cosas de la ventana
        JPanel ventana=new JPanel(new BorderLayout());
        ventana.setBackground(color);
        add(ventana,BorderLayout.CENTER);
        
        //Este panel se coloca en la parte superior
        JPanel baja=new JPanel();
        baja.setBackground(color);
        add(baja,BorderLayout.WEST);
        
        //Se crean los 2 fuentes del texto con diferentes tamaños
        Font font=new Font("Helvetica",Font.PLAIN,20);
        JLabel lblbanear=new JLabel("Banear a un jugador de BaluRP");
        lblbanear.setFont(font);
        
        font=new Font("Helvetica",Font.PLAIN,15);
        JLabel lblseleccion=new JLabel("Selecciona el motivo del baneo");
        lblseleccion.setFont(font);
        JLabel lblseleccion2=new JLabel("Para des-seleccionar de clic nuevamente en el motivo");
        lblseleccion2.setFont(font);
        
        //Estis paneles son para agregar lo de banear jugador mas separado del texto siguiente
        pnlbanear.add(baja,BorderLayout.NORTH);
        JPanel izquierdab=new JPanel();
        izquierdab.setBackground(color);
        pnlbanear.add(izquierdab,BorderLayout.WEST);
        pnlbanear.add(lblbanear,BorderLayout.CENTER);
        
        //Aqui se agregan los siguientes 2 textos
        JPanel comando2=new JPanel(new GridLayout(2,1));
        comando2.add(lblseleccion);
        comando2.add(lblseleccion2);
        comando2.setBackground(color);
        ventana.add(izquierda,BorderLayout.WEST);
        JPanel izq=new JPanel();
        izq.setBackground(color);
        JPanel coma=new JPanel(new BorderLayout());
        coma.add(baja,BorderLayout.NORTH);
        coma.add(comando2,BorderLayout.CENTER);
        coma.add(izq,BorderLayout.WEST);
        ventana.add(coma,BorderLayout.NORTH);
        
        //Creamos el panel que va en el centro del panel ventana
        JPanel motivosaplicar=new JPanel (new GridLayout(1,2,20,20));
        motivosaplicar.setBackground(color); //Le asignamos el color
        ventana.add(motivosaplicar,BorderLayout.CENTER);
        ventana.add(derecha,BorderLayout.EAST);
        
        //Se crea el panel de motivos que hira en gridlayout del panel motivosaplicar
        JPanel motivos=new JPanel(new BorderLayout());
        motivos.setBackground(color);//asignamos el color
        JLabel lblmotivo=new JLabel("Motivos de baneo y su duración                   ");
        lblmotivo.setFont(font);
        JPanel pnlmotivo=new JPanel(new FlowLayout());
        pnlmotivo.add(lblmotivo);
        pnlmotivo.setBackground(color);
        JPanel pnlarriba=new JPanel(new BorderLayout());
        pnlarriba.setBackground(color);
        pnlarriba.add(baja,BorderLayout.NORTH);
        pnlarriba.add(pnlmotivo,BorderLayout.CENTER);
        
        //Se agregan los jlabel de la informacion
        
        JLabel nombre;
        ImageIcon image=new ImageIcon(getClass().getResource("/imagenes/motivos.png"));
        nombre=new JLabel(image);
        //textos.add(nombre);
        
        
        //Se agrega los paneles a motivo
        motivos.add(pnlarriba,BorderLayout.NORTH);
        motivos.add(nombre,BorderLayout.CENTER);
        
        //Se crea el panel de baneos que hira en el gridlayout del panel motivosaplicar
        //Se pone un gridloyaut ya que la seccion de baneos la queremos en el medio.
        JPanel baneos=new JPanel(new GridLayout(1,3));
        JPanel opciones=new JPanel(new GridLayout(3,1));
        JPanel opciones2=new JPanel(new BorderLayout());
        JPanel opciones3=new JPanel (new BorderLayout());
        opciones.setBackground(Color.GREEN);
        JLabel lblaplicarban=new JLabel("Aplicar ban");
        opciones2.add(lblaplicarban,BorderLayout.CENTER);
        opciones2.add(opciones3,BorderLayout.SOUTH);
        JLabel prueba=new JLabel("Prueba");
        opciones3.add(prueba,BorderLayout.NORTH);
        opciones3.add(new JPanel(),BorderLayout.SOUTH);
        lblaplicarban.setHorizontalAlignment(SwingConstants.CENTER);
        opciones.add(opciones2);
        baneos.add(new JPanel());
        baneos.add(opciones);
        baneos.add(new JPanel());
        
        //baneos.setBackground(color);
        
        
        //Agregamos los 2 paneles a motivospalicar
        motivosaplicar.add(motivos);
        motivosaplicar.add(baneos);
        
        
        
        
    }
    @Override
    public void actionPerformed(ActionEvent ae) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    
}
