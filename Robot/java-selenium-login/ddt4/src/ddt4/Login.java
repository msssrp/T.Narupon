package ddt4;

import static org.junit.jupiter.api.Assertions.*;

import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.text.SimpleDateFormat;
import java.util.Date;

import org.apache.poi.xssf.usermodel.XSSFCell;
import org.apache.poi.xssf.usermodel.XSSFRow;
import org.apache.poi.xssf.usermodel.XSSFSheet;
import org.apache.poi.xssf.usermodel.XSSFWorkbook;
import org.junit.jupiter.api.BeforeAll;
import org.junit.jupiter.api.Test;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;

class Login {

	@BeforeAll
	static void setUpBeforeClass() throws Exception {
	}

	  @Test
	    void testCheckLogin() throws Exception {
	        System.setProperty("webdriver.chrome.driver", "D:/chromedriver.exe");

	        SimpleDateFormat formatter = new SimpleDateFormat("dd/MM/yyyy HH:mm:ss");
	        Date date = new Date();
	        String testDate = formatter.format(date);
	        String testerName = "Siripoom Luengsaard";

	        String path = "D:/testdata.xlsx";
	        FileInputStream fs = new FileInputStream(path);

	        // Creating a workbook
	        XSSFWorkbook workbook = new XSSFWorkbook(fs);
	        XSSFSheet sheet = workbook.getSheetAt(0);
	        int row = sheet.getLastRowNum() + 1;

	        for (int i = 1; i < row; i++) {
	            WebDriver driver = new ChromeDriver();
	            driver.get("https://techvibe.app");
	            String testcaseid = sheet.getRow(i).getCell(0).toString();
	            String username;
	            String password;
	            username = sheet.getRow(i).getCell(1).toString();
	            password = sheet.getRow(i).getCell(2).toString();
	            driver.findElement(By.id("btn-login")).click();
	            Thread.sleep(3000);
	            driver.findElement(By.id("signin-google")).click();
	            Thread.sleep(3000);
	            driver.findElement(By.id("identifierId")).sendKeys(username);
	            Thread.sleep(3000);
	            driver.findElement(By.id("identifierNext")).click();
	            Thread.sleep(3000);
	            driver.findElement(By.xpath("//*[@id=\"password\"]/div[1]/div/div[1]/input")).sendKeys(password);
	            Thread.sleep(3000);
	            driver.findElement(By.id("passwordNext")).click();
	            Thread.sleep(3000);
	            driver.findElement(By.xpath("//*[@id=\"yDmH0d\"]/c-wiz/div/div[3]/div/div/div[2]/div/div/button")).click();
	            Thread.sleep(3000);
	            String actual;
	            String expected = sheet.getRow(i).getCell(3).toString();
	            XSSFRow rows = sheet.getRow(i);
	            XSSFCell cell = rows.createCell(4);
	            actual = driver.findElement(By.xpath("/html/body/div[1]/div[2]/div/div[1]/div[1]/div[2]/div[1]/button")).getText();
	            Thread.sleep(3000);
	            cell.setCellValue(actual);
	            assertEquals(expected, actual);
	            XSSFCell cell2 = rows.createCell(5);
	            cell2.setCellValue(actual.equals(expected) ? "Pass" : "Fail");
	            XSSFCell cell3 = rows.createCell(6);
	            cell3.setCellValue(testDate);
	            XSSFCell cell4 = rows.createCell(7);
	            cell4.setCellValue(testerName);
	            FileOutputStream fos = new FileOutputStream(path);
	            workbook.write(fos);
	            fos.close();
	            driver.close();
	        }
	        workbook.close();
	        fs.close();
	    }

}
