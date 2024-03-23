
/**
 * Escreva uma descrição da classe Professor aqui.
 * 
 * @author (seu nome) 
 * @version (um número da versão ou uma data)
 */
import java.util.Date;
public class Professor extends Pessoa
{
    // variáveis de instância - substitua o exemplo abaixo pelo seu próprio
    private String Titulacao;
    private String DataContratacao;

    /**
     * Construtor para objetos da classe Professor
     */
    public Professor(String nome, String data, String titulacao, String dataContratacao)
    {
        super(nome, data);
        Titulacao = titulacao;
        DataContratacao = dataContratacao;
    }
    

    /**
     * Um exemplo de um método - substitua este comentário pelo seu próprio
     * 
     * @param  y   um exemplo de um parâmetro de método
     * @return     a soma de x e y 
     */
    public String getTitulacao()
    {
        return Titulacao;
    }
    
    public void setTitulacao(String titulacao)
    {
        this.Titulacao = titulacao;
    }
    
    public String getDataContratacao()
    {
        return DataContratacao;
    }
    
    public void setDataContratacao(String dataContratacao)
    {
        this.DataContratacao = dataContratacao;
    }

    public void RetiraLivro(){}
}
